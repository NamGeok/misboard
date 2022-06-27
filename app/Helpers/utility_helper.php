<?php

$CI_INSTANCE = [];

function register_ci_instance(\App\Controllers\BaseController &$_ci) {
    global $CI_INSTANCE;
    $CI_INSTANCE[0] = &$_ci;
}


function &get_instance(): \App\Controllers\BaseController {
    global $CI_INSTANCE;
    return $CI_INSTANCE[0];
}
