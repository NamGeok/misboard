<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'MEMBER';
	protected $primaryKey           = 'mb_seq';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		'mb_id',
		'mb_password',
		'mb_name',
		'mb_nick',
		'mb_email',
		'mb_homepage',
		'mb_grade',
		'mb_level',
		'mb_point',
		'mb_exp',
		'mb_tel',
		'mb_hp',
		'mb_login_ip',
		'mb_date_ip',
		'mb_lasttime'
	];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'mb_created_at';
	protected $updatedField         = 'mb_updated_at';
	protected $deletedField         = 'mb_deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];
}