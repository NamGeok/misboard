<?php

namespace App\Controllers;

/**
 * @author Andy Brookes
 * @author Andy Brookes <andybrookestar at gmail  dot    com>
 */
use CodeIgniter\Controller;
use \App\Models\UserModel;
use CodeIgniter\I18n\Time;


class Login  extends BaseController
{
	protected $regex= '/[^A-Za-z0-9!?\s]+/';

	protected $name;
	protected $password;
	protected $captchaEntered;
	protected $actualCaptcha;
	protected $passwordMatches;
	protected $hashPassword;
	protected $userNameDB;
	protected $userNameMatches;
	protected $captchaMatches;

	public function __construct()
	{

	}

	public function admin()
	{

		$data= [
			'title' => 'admin',
			'info'  => 'your logged in dont forget to logout' ,
		];

		return view('admin/main', $data);
	}









}
