<?php

$routes->get('user', '\Modules\User\Controllers\Users::index');
$routes->get('user/login', '\Modules\User\Controllers\Auth::index');

$routes->get('user/register', '\Modules\User\Controllers\Auth::register');
$routes->post('user/create', '\Modules\User\Controllers\Auth::create');
$routes->post('user/login', '\Modules\User\Controllers\Auth::loginValidate');
$routes->get('user/logout', '\Modules\User\Controllers\Auth::logout');