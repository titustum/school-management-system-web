<?php

namespace App\Controllers;

class Student extends BaseController
{

	public function add()
	{

		return "HAHHAHAH";
		
		// echo "Student Names->".$this->request->getPost('student_names');
		// echo "Student Year of Birth->".$this->request->getPost('student_yob');
	}
	public function insert_student($value='')
	{
		echo "AM READY";
	}
}