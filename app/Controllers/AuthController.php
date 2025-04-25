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

    public function genpass()
    {
        echo password_hash('daniel2025', PASSWORD_DEFAULT);
    }

    public function login()
    {
        if ($this->request->getPost()) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $dataUser = ['id' => '1', 'username' => 'daniel', 'password' => '$2y$10$PCqkaG1zzVi.NiwOEGvBVOWz8jdkNfaQhONIdHOavuPWllzoPqLi.', 'role' => 'admin', 'fullname' => 'Daniel Aquaries Pratama'];
            // $dataUser = ['id' => '1', 'username' => 'daniel', 'password' => '$2y$10$PCqkaG1zzVi.NiwOEGvBVOWz8jdkNfaQhONIdHOavuPWllzoPqLi.', 'role' => 'user', 'fullname' => 'Daniel Aquaries Pratama']; // passw 123

            if ($username == $dataUser['username']) {
                if (password_verify($password, $dataUser['password'])) {
                    session()->set([
                        'id' => $dataUser['id'],
                        'username' => $dataUser['username'],
                        'role' => $dataUser['role'],
                        'fullname' => $dataUser['fullname'],
                        'isLoggedIn' => TRUE
                    ]);

                    return redirect()->to(base_url('/'));
                } else {
                    session()->setFlashdata('failed', 'Username & Password Salah');
                    return redirect()->back();
                }
            } else {
                session()->setFlashdata('failed', 'Username Tidak Ditemukan');
                return redirect()->back();
            }
        } else {
            return view('login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
