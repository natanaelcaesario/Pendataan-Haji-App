<?php

namespace App\Controllers\User;

use CodeIgniter\Controller;

class Berkas extends Controller
{
    public function index()
    {
        if (session()->has('admin')) {
            session_destroy();
            return redirect()->to(site_url('user/login'));
        }
        $id = session()->get('id_user');
        $writepath = './uploads/data_diri';
        $userModel = new \App\Models\userModel();
        $user = new \App\Entities\User();
        $find = $userModel->find($id);
        if ($find) {
            if ($this->request->getPost()) {
                $data = $this->request->getPost();
                $gambar = $this->request->getFile('foto_ktp');
                $gambar2 = $this->request->getFile('passport');
                $gambar3 = $this->request->getFile('suratnikah');
                $gambar4 = $this->request->getFile('pasfoto');
                $img = $gambar->getRandomName();
                $img2 = $gambar2->getRandomName();
                $img3 = $gambar3->getRandomName();
                $img4 = $gambar4->getRandomName();
                $writepath = './uploads/data_diri';

                $apdet = [
                    'foto_ktp' => $img,
                    'passport' => $img2,
                    'suratnikah' => $img3,
                    'pasfoto' => $img4,
                    'verif' => "diupload",
                ];

                $update = $userModel->update($id, $apdet);
                if ($update) {
                    $gambar->move($writepath, $img);
                    $gambar2->move($writepath, $img2);
                    $gambar3->move($writepath, $img3);
                    $gambar4->move($writepath, $img4);
                }
                return redirect()->to(site_url('home'));
            }
            echo view('navbar');
            echo view('footer');
            return view('User/berkas', ['find' => $find]);
        }
    }
}
