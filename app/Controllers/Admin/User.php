<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class User extends BaseController
{

	public function __construct()
	{
		$this->db = \Config\Database::connect('default', false);
	}

	public function index()
	{

		// 기본값
		$data = [
			'page_title' => 'aaaa'
		];

		return view('admin/user', $data);
		// return view('welcome_message');
	}

	public function list()
	{

		// 기본값
		$data = [
			'page_title' => 'aaaa'
		];

		return view('admin/usrt_list', $data);
		// return view('welcome_message');
	}
}
