<?php

namespace App\Controllers;

class Account extends BaseController
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
}