<?php

namespace App\Controllers;

class Home extends BaseController
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

		return view('main', $data);
		// return view('welcome_message');
	}
}
