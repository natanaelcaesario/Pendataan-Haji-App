<?php

namespace App\Controllers\User;

use CodeIgniter\Controller;

class Register extends Controller
{

    public function index()
    {
        helper('text');
        if ($this->request->getPost()) {
            $userModel = new \App\Models\UserModel();
            $user = new \App\Entities\User();
            $daftar = $this->request->getPost();

            $find = $userModel->where('email', $daftar["email"])->first();
            if ($find) {
                session()->setFlashdata('errors', 'Email sudah terdaftar');
                return redirect()->to(site_url('user/login'));
            }

            $find = $userModel->where('ktp', $daftar["ktp"])->first();
            if ($find) {
                session()->setFlashdata('errors', 'Sepertinya anda sudah punya akun, login dengan akun yang ada atau hubungi admin');
                return redirect()->to(site_url('user/register'));
            }
            $user->fill($daftar);
            $user->kode_pelanggan = random_string('numeric', 8);
            $foto = $this->request->getFile('foto');
            $img = $foto->getRandomName();
            $writepath = './uploads';
            $foto->move($writepath, $img);
            $user->foto = $img;
            $userModel->save($user);
            session()->setFlashdata('success', 'Berhasil membuat akun');
            return redirect()->to(site_url('user/login'));
        }
        echo view('navbar');
        echo view('user/register');
    }
}
