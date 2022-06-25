<?php

namespace App\Entities;

use CodeIgniter\Entity;

class User extends Entity
{
	protected $datamap = [
		'fullname' => 'name',
		'emailAddress' => 'email',
		'phoneNumber' => 'phone_no',
	];

	protected $dates   = [
		'created_at',
		'updated_at',
		'deleted_at',
	];

	protected $casts   = [];

    function setPassword(string $password)
    {
        $this->attributes["password"] = password_hash($password, PASSWORD_BCRYPT);
        return $this;
    }

	public function getName(){
        // accessor which replaces space with _ in name value
        return str_replace(" ", "_", $this->attributes['name']);
    }

    public function getEmail(){
        // accessor which changes the case of email address, means in upper case
        return strtoupper($this->attributes['email']);
    }

	public function full_data(){
        return $this->attributes['name']. " ".$this->attributes['email'];
    }
}