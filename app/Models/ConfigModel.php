<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfigModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'CONFIG';
	protected $metaKey              = 'cf_key';
	protected $metaValue            = 'cf_value';
	protected $cache_name           = 'config-model-get';
	protected $cache_time           = 86400;
	protected $allowedFields        = [
		'cf_key',
		'cf_value',
	];

	function __construct()
	{
		parent::__construct();
	}

	public function get_all_meta()
	{
		$cachename = $this->cache_name;

		if ( ! $result = $this->cache->get($cachename)) {
			$result = array();
			$res    = $this->get();

			if ($res && is_array($res)) {
				foreach ($res as $val) {
					$result[$val[$this->meta_key]] = $val[$this->meta_value];
				}
			}

			$this->cache->save($cachename, $result, $this->cache_time);
		}

		return $result;
	}

	public function save($savedata = '')
	{
		if ($savedata && is_array($savedata)) {
			foreach ($savedata as $column => $value) {
				$this->meta_update($column, $value);
			}
		}

		$this->cache->delete($this->cache_name);
	}

	public function meta_update($column = '', $value = false)
	{
		$column = trim($column);

		if (empty($column)) {
			return false;
		}

		$old_value = $this->item($column);

		if (is_null($value)) {
			$value = '';
		}

		if ($value === $old_value) {
			return false;
		}

		if (false === $old_value) {
			return $this->add_meta($column, $value);
		}

		return $this->update_meta($column, $value);
	}

	public function item($column = '')
	{
		if (empty($column)) {
			return false;
		}

		$result = $this->get_all_meta();

		return isset($result[ $column ]) ? $result[ $column ] : false;
	}

	public function add_meta($column = '', $value = '')
	{
		$column = trim($column);

		if (empty($column)) {
			return false;
		}

		$updatedata = array(
			'cfg_key' => $column,
			'cfg_value' => $value,
		);

		$this->replace($updatedata);

		return true;
	}

	public function update_meta($column = '', $value = '')
	{
		$column = trim($column);

		if (empty($column)) {
			return false;
		}

		$this->where($this->meta_key, $column);
		$data = array($this->meta_value => $value);
		$this->update($data);

		return true;
	}

}
