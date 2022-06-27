<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
	public function login()
	{
		$data = [];

		if ($this->request->getMethod() == 'post') {
			$rules = [
				'mb_id' => 'required|min_length[4]|max_length[16]',
				'mb_password' => 'required|min_length[5]|max_length[32]|validateUser[mb_id,mb_password]',
			];

			$errors = [
				'mb_password' => [
					'validateUser' => "아이디와 비밀번호가 맞지 않습니다.",
				],
			];

			if (!$this->validate($rules, $errors)) {
				return view('login/login', [
					"validation" => $this->validator,
				]);
			} else {
				$model = new UserModel();

				$user = $model->where('mb_id', $this->request->getVar('mb_id'))->first();

				// Stroing session values
				$this->setUserSession($user);

				// Redirecting to dashboard after login
				return redirect()->to(base_url('/'));

				/*
				if($user['role'] == "admin"){
					return redirect()->to(base_url('admin'));
				}elseif($user['role'] == "editor"){
					return redirect()->to(base_url('editor'));
				}
				*/
			}
		}

		return view('login/login');
	}

	private function setUserSession($user)
	{
		$data = [
			'mb_seq'     => $user['mb_seq'],
			'mb_id'      => $user['mb_id'],
			'mb_grade'   => $user['mb_grade'],
			'mb_level'   => $user['mb_level'],
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to('/');
	}
}
