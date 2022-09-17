<?php

namespace Modules\Admin\Controllers;

class Auth extends Guest
{
    public function index(): string
    {
        return view('login');
    }

    public function register(): string
    {
        return view('register');
    }

    public function create()
    {

    }

    public function loginValidate()
    {

    }

    public function logout()
    {

    }
}