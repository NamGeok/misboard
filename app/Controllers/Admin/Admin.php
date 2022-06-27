<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admin extends BaseController
{

	public function __construct()
	{
		if (session()->get('mb_grade') != "10") {
			return redirect()->to(base_url('/'));
		}
	}

	public function index()
	{

		// 기본값
		$data = [
			'page_title' => ':+: Admin :+:::'
		];

		return view('admin/main/main', $data);
		// return view('welcome_message');
	}
}
