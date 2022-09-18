<?php

namespace Modules\Admin\Controllers;

use Modules\Admin\Models\Admin as AdminUser;

class Auth extends Guest
{
    private $user;
    private $session;

    public function __construct()
    {
        helper(['form', 'url', 'session']);
        $this->user = new AdminUser();
        $this->session = session();
    }

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
        $inputs = $this->validate([
            'name' => 'required|min_length[5]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[5]',
            'confirm_password' => 'required|matches[password]'
        ], [
            'confirm_password'=> [
                'required'=>'Retype Password is required',
                'match' => 'Retype password is miss matched'
            ]
        ]);

        if (!$inputs) {
            return view('register', [
                'validation' => $this->validator
            ]);
        }

        $this->user->save([
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ]);
        session()->setFlashdata('success', 'Success! registration completed.');
        return redirect()->to(site_url('admin/register'));

    }

    public function loginValidate()
    {
        $inputs = $this->validate([
            'email' => 'required|valid_email',
            'password' => 'required|min_length[5]'
        ]);

        if (!$inputs) {
            return view('login', [
                'validation' => $this->validator
            ]);
        }

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $this->user->where('email', $email)->first();

        if ($user) {

            $pass = $user['password'];
            $authPassword = password_verify($password, $pass);

            if ($authPassword) {
                $sessionData = [
                    'admin.id' => $user['id'],
                    'admin.name' => $user['name'],
                    'admin.email' => $user['email'],
                    'admin.loggedIn' => true,
                ];

                $this->session->set($sessionData);
                return redirect()->to('admin');
            }

            session()->setFlashdata('failed', 'Failed! incorrect password');
            return redirect()->to(site_url('admin/login'));
        }

        session()->setFlashdata('failed', 'Failed! incorrect email');
        return redirect()->to(site_url('admin/login'));
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('admin/login');
    }
}