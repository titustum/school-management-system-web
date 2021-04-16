<?php

namespace App\Controllers;

class Account extends BaseController
{
	function __construct(){
		// parent::__construct();
		$this->session = \Config\Services::session();
		$this->userModel = new \App\Models\UserModel();
	}

	public function index()
	{
		// if($this->session->has('u_mobile')) return redirect()->to('../dashboard');
		return view('admin/login');
	}

	public function create($usertype="")
	{
		if($this->session->has('u_mobile')) return redirect()->to('../dashboard');
		return view('admin/register');
	}

	public function check_if_logged(){
		if($this->session->has('u_mobile')){
			redirect()->to('../dashboard');
		}
	}

	public function logUserIn()
	{
		if(strtoupper($this->request->getMethod())==="POST"){
			$data = array(
				'u_mobile' => $this->request->getPost('user_mobile'),
				'u_password' => strtoupper(md5($this->request->getPost('user_password'))),
			);
			$q_data=$this->userModel->where($data)->first();
			if($q_data){
				$session_data=array(
					'u_mobile'=>$q_data['u_mobile'], 
					'u_names'=>$q_data['u_names'], 
					'u_type'=>$q_data['u_type'], 
					'u_gender'=>$q_data['u_gender']
				);
				$this->session->set($session_data);
				return redirect()->to("../dashboard");
			}
		}
		return redirect()->to(base_url());
	}

	public function registerUser()
	{
		// Create a new class manually
		$userModel = new \App\Models\UserModel();


		if(strtoupper($this->request->getMethod())==="POST"){
			$data = array(
				'u_mobile' => $this->request->getPost('mobile'),
				'u_names' => strtoupper($this->request->getPost('names')),
				'u_type' => strtoupper($this->request->getPost('user-type')),
				'u_gender' => strtoupper($this->request->getPost('user-gender')),
				'u_password' => strtoupper(md5($this->request->getPost('new-password'))),
			);
			if($userModel->insert($data)){
				array_pop($data);
				$this->session->set($data);
				return redirect()->to("../dashboard");
			}
		}
	}

	public function passwordToMd5($raw_pass='')
	{
		echo strtoupper(md5($raw_pass));
	}
}
