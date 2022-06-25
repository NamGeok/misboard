<?php

namespace App\Controllers;

class Main extends BaseController
{
    /**
     * 메인
     *
     * 레이아웃만 사용
     * uView('user/main', $data, ['blank'=>true]);
     * 해당 뷰만 호출하기
     * uView('user/main', $data, ['nowrap'=>true]);
     * EX
     * $data['left_menu'] = uView('user/left_menu', $data, ['nowrap'=>true]);
     * @return html
     */
    public function index()
    {
        // 기본값
        $data = [
            'page_title' => 'aaaa'
        ];

        return uView('main', $data);
    }
}
