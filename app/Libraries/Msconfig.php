<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Model\ConfigModel;

class Msconfig extends BaseController
{
	private $MS;
	private $cfg;
	private $device_type;
	private $device_view_type;

	function __construct()
	{

	}

	public function get_config()
	{
		$model = new ConfigModel();

		$this->cfg = $model->get_all_meta();
	}

	public function item($column = '')
	{
		if (empty($column)) {
			return false;
		}

		if (empty($this->cfg)) {
			$this->get_config();
		}

		if (empty($this->cfg)) {
			return false;
		}

		$config = $this->cfg;

		return isset($config[$column]) ? $config[$column] : false;
	}

	public function get_device_view_type()
	{
		return $this->device_view_type;
	}

	 public function set_device_view_type($device_view_type)
	{
		$this->device_view_type = $device_view_type;
	}

	public function get_device_type()
	{
		return $this->device_type;
	}

	public function set_device_type($device_type)
	{
		$this->device_type = $device_type;
	}
}
