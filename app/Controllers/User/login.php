<?php

namespace App\Controllers\User;

use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        if ($this->request->getPost()) {
            $session = session();
            $userModel = new \App\Models\UserModel();
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $user = $userModel->where('email', $username)->first();
            if ($user) {
                if ($user->password == $password) {
                    $ses_data = [
                        'id_user' => $user->id_user,
                        'nama' => $user->nama,
                        'email' => $user->email,
                        'logged' => TRUE,
                        'user' => TRUE,
                    ];
                    $session->set($ses_data);
                    return redirect()->to(site_url('home'));
                } else {
                    session()->setFlashdata('errors', 'Username atau password salah');
                    return redirect()->to(site_url('user/login'));
                }
            } else {
                session()->setFlashdata('errors', 'Sepertinya user ini tidak ada');
            }
        }
        echo view('navbar');
        echo view('user/login');
    }
}
