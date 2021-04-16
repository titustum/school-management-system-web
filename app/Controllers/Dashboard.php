<?php

namespace App\Controllers;

class Dashboard extends BaseController
{

	function __construct(){
		$this->session = \Config\Services::session();
		$this->studentModel=new \App\Models\StudentModel();
	}
	
	public function index()
	{
		if(!$this->session->has('u_mobile')) return redirect()->to(base_url());
		$data=$this->session->get();
		$data["all_students"]=$this->studentModel->findAll();
		return view('admin/dashboard', $data);

	}

	public function students()
	{
		if(!$this->session->has('u_mobile')) return redirect()->to(base_url());
		$data=$this->session->get();
		$data["all_students"]=$this->studentModel->findAll();
		return view('admin/students', $data);

	}
	public function add_student()
	{
		if(!$this->session->has('u_mobile')) return redirect()->to(base_url());
		$data=$this->session->get();
		$data["all_students"]=$this->studentModel->findAll();
		return view('admin/add_student', $data);

	}

	public function results()
	{
		
	}
	public function addresults()
	{
		if(!$this->session->has('u_mobile')) return redirect()->to(base_url());
		$data=$this->session->get();
		return view('admin/add_results', $data);
	}

	public function fees()
	{
		
	}
	public function addfees()
	{
		if(!$this->session->has('u_mobile')) return redirect()->to(base_url());
		$data=$this->session->get();
		return view('admin/add_fees', $data);
		
	}

	public function logout()
	{
		if(!$this->session->has('u_mobile')) return redirect()->to(base_url());
		$sess_items = ['u_names', 'u_mobile' , 'u_type', 'u_gender'];
		$this->session->remove($sess_items);
		return redirect()->to('../dashboard'); 
	}
}
