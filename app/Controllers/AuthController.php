<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    function __construct()
    {
        helper('form');
    }

    public function generatepassword() {
        echo password_hash("123",PASSWORD_DEFAULT);
    }

    public function login()
    {
    if ($this->request->getPost()) {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $dataUser = [
        'april' => ['password' => password_hash('123', PASSWORD_DEFAULT), 'role' => 'admin'], // passw 123
        'budi'  => ['password' => password_hash('123', PASSWORD_DEFAULT), 'role' => 'user']
        ]; // passw 123
    

        if (isset($dataUser[$username])) {
            $dataUser = $dataUser[$username];

            if (password_verify($password, $dataUser['password'])) {
                session()->set([
                    'username' => $username,
                    'role' => $dataUser['role'],
                    'isLoggedIn' => TRUE
                ]);

                if ($dataUser['role'] == 'admin') {
                    return redirect()->to('/admin');
                } else {
                    return redirect()->to('/user');
                }               
            } else {
                session()->setFlashdata('failed', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('failed', 'Username Tidak Ditemukan');
            return redirect()->back();
        }
    } else {
        return view('v_login');
    }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(site_url('/'));
    }
}
