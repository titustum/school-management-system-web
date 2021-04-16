<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('admins/login');
	}

	public function login($err=0)
	{
		return view('admins/login');
	}

	public function create()
	{
		return view('admins/register');
	}

	public function registerUser()
	{
		if(strtoupper($this->request->getMethod())==="POST"){
			$data = array(
				'mobile' => $this->request->getPost('mobile'),
				'names' => $this->request->getPost('names'),
				'department' => $this->request->getPost('department'),
				'password' => $this->request->getPost('new-password'),
			);
			echo "<pre>";
			print_r($data);
			echo "</pre>";
		}
	}
}
