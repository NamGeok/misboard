<?php

// 템플릿 레이아웃과 일반 레이아웃 스위쳐
if (function_exists('viewSwitch') === false) {
	function viewSwitch(string $name, array $data = [], array $options = [])
	{
		$isTamplated =(str_replace('.tmp', '', $name) === $name?false:true);
		if ($isTamplated === true) {
			$parser = \Config\Services::parser();
			return $parser->setData($data)->render($name);
		} else {
			return view($name, $data, $options);
		}
	}
}

// 사용자 페이지 레이아웃 뷰
if (function_exists('uView') === false) {
	function uView(string $name, array $data = [], array $options = [])
	{
		if (isset($options['nowrap']) === true) { // ! content
			return viewSwitch($name, $data, $options);
		} elseif (isset($options['blank']) === true) { // ! <body>content</body>
			return viewSwitch('_include/_layout', array_merge($data, [
				'content'=>viewSwitch($name, $data, $options)
			]), $options);
		} else { // ! <body>layout > content</body>
			return viewSwitch('_include/_layout', array_merge($data, [
				'content'=>viewSwitch('_include/_content', array_merge($data, [
					'content'=>viewSwitch($name, $data, $options)
				]), $options)
			]), $options);
		}
	}
}