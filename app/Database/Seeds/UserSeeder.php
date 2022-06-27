<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
	public function run()
	{
		$user_object = new UserModel();

		$user_object->insertBatch([
			[
				'mb_id'       => 'admin',
				'mb_password' => password_hash('q1234', PASSWORD_DEFAULT),
				'mb_name'     => '관리자',
				'mb_nick'     => '관리자',
				'mb_email'    => 'help@mail.com',
				'mb_homepage' => '',
				'mb_grade'    => 1,
				'mb_level'    => 1,
				'mb_point'    => 0,
				'mb_exp'      => 0,
				'mb_tel'      => '',
				'mb_hp'       => '',
				'mb_login_ip' => '',
				'mb_date_ip'  => '',
				'mb_lasttime' => ''
			]
		]);
	}
}
