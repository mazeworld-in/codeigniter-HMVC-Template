<?php

$routes->get('admin', '\Modules\Admin\Controllers\Admin::index', ['filter'=>'auth']);
$routes->get('admin/login', '\Modules\Admin\Controllers\Auth::index');

$routes->get('admin/register', '\Modules\Admin\Controllers\Auth::register');
$routes->post('admin/create', '\Modules\Admin\Controllers\Auth::create');
$routes->post('admin/login', '\Modules\Admin\Controllers\Auth::loginValidate');
$routes->get('admin/logout', '\Modules\Admin\Controllers\Auth::logout');