<?php

namespace App\Controllers;

class Student extends BaseController
{

	function __construct(){
		$this->session = \Config\Services::session();
		$this->studentModel=new \App\Models\StudentModel();
	}

	public function add()
	{
		if(strtoupper($this->request->getMethod())==="POST" && $this->session->u_mobile){
			$data=array(
				"st_names"=>$this->request->getPost("student_names"),
	  			"st_gender"=>$this->request->getPost("student_gender"),
	  			"st_class"=>$this->request->getPost("student_form"),
	  			"st_stream"=>$this->request->getPost("student_stream"),
	  			"st_yob"=>$this->request->getPost("student_names"),
	  			"st_parent_name"=>$this->request->getPost("parent_names"),
	  			"parent_gender"=>$this->request->getPost("parent_gender"),
	  			"st_parent_phone"=>$this->request->getPost("parent_mobile"),
	  			"added_by"=>$this->session->u_mobile,
			);

			$student_names=$data['st_names'];

			if($this->studentModel->insert($data)){
				return $student_names;
			}
			return "Problem inserting student data";
		
		}
		return true;
				
	}

	public function addmarks()
	{
		$this->examModel=new \App\Models\ExamModel();
		if(strtoupper($this->request->getMethod())==="POST" && $this->session->u_mobile){

			$data=array(
				"st_adm"=>$this->request->getPost("admission_number"),
	  			"english"=>$this->request->getPost("english"),
	  			"kisw"=>$this->request->getPost("kiswahili"),
	  			"maths"=>$this->request->getPost("maths"),
	  			"social_re"=>$this->request->getPost("social_studies"),
	  			"science"=>$this->request->getPost("science"),
	  			"term"=>$this->request->getPost("school_term"),
	  			"class"=>$this->request->getPost("st_form"),
			);

			$student_adm=$data['st_adm'];

			if($this->examModel->insert($data)){
				return "Marks for ".$student_adm." as been added successfully";
			}
			return "Problem inserting student data";
		
		}
		return true;
				
	}
}