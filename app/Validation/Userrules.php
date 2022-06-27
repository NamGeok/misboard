<?php
namespace App\Validation;

use App\Models\UserModel;

class Userrules
{
	public function validateUser(string $str, string $fields, array $data)
	{
		$model = new UserModel();

		$user = $model->where('mb_id', $data['mb_id'])->first();

		if (!$user) {
			return false;
		}

		return password_verify($data['mb_password'], $user['mb_password']);
	}
}