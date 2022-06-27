<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Managerlayout extends BaseController
{
	private $css = array();
	private $js  = array();

	function __construct()
	{

	}

	/**
	 * 관리자페이지 레이아웃관리합니다
	 **/
	function admin($config = array(), $device_view_type = '')
	{
		$data = array();
		$menu_files = array();
		$tmp = dir(APPPATH . 'Config');

		while ($entry = $tmp->read()) {
			if (!preg_match('/^admin_menu_([0-9]{3}).*\.php$/', $entry, $m))
				continue;

			$entry = substr($entry , 0, -4);
			$menu_files[] = $entry;
		}

		if ($menu_files) {
			asort($menu_files);
		}

		$data['admin_page_menu'] = array();

		foreach($menu_files as $file){
			$CI->load->config($file);
			$res = config_item('admin_page_menu');
			$data['admin_page_menu'] += config_item('admin_page_menu');
		}
















		return $data;
	}

	/**
	 * 프론트페이지 레이아웃관리합니다
	 **/
	function front($config = array(), $device_view_type = '')
	{
		$data = array();

		return $data;
	}

	/**
	 * 프리뷰 페이지를 위한 레이아웃관리입니다
	 */
	function preview($config = array())
	{
		$data = array();

		return $data;
	}

	/**
	 * css를 추가합니다
	 **/
	function add_css($file = '')
	{
		if (empty($file)) {
			return;
		}
		array_push($this->css, $file);
	}


	/**
	 * js를 추가합니다
	 **/
	function add_js($file = '')
	{
		if (empty($file)) {
			return;
		}
		array_push($this->js, $file);
	}

	/**
	 * 추가된 css를 리턴합니다
	 **/
	function display_css()
	{
		$return = '';
		$_css = $this->css;
		if ($_css) {
			foreach ($_css as $val) {
				$return .= '<link rel="stylesheet" type="text/css" href="' . $val . '" />';
			}
		}
		return $return;
	}

	/**
	 * 추가된 js를 리턴합니다
	 **/
	function display_js()
	{
		$return = '';
		$_js = $this->js;
		if ($_js) {
			foreach ($_js as $val) {
				$return .= '<script type="text/javascript" src="' . $val . '"></script>';
			}
		}
		return $return;
	}
}