<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class User extends BaseController
{

    public function index()
    {
        echo view('navbar');
        echo view('footer');
        $session = session();
        $userModel = new \App\Models\UserModel();
        $user = new \App\Entities\User();
        $data = $session->get('id_user');
        $info = $userModel->where('id_user', $data)->first();
        if (!$info) {
            return \redirect()->to(\site_url('user/login'));
        }
        if ($this->request->getPost()) {
            $bank = $this->request->getPost();
            $user->fill($bank)->info;
            $userModel->save($user);
            return \redirect()->to(\site_url('user/user'));
        }

        return view('user/dashboard', ['info' => $info]);
    }


    // lanjut pembayaran function
    public function informasi()
    {
        echo view('navbar');
        echo view('footer');
        $session = session();
        // get product information
        $id = $this->request->uri->getSegment(3);
        $produkModel = new \App\Models\ProductModel();
        $userModel = new \App\Models\UserModel();
        $transaksiModel = new \App\Models\TransaksiModel();
        $produk = $produkModel->find($id);
        // get user data
        $data = $session->get('id_user');
        $info = $userModel->where('id_user', $data)->first();
        $trans = $transaksiModel->where('id_user', $data)->first();
        $cek_trans = $transaksiModel->db->table('transaksi')
        ->select('*')
        ->where([
            'id_user' => $data,
            'status' => 'Belum Lunas', 
        ])
        ->get()->getResultArray();
// dd($cek_trans);  
        if ($cek_trans) {
            return redirect()->to(site_url('user/transaksi'));
        }
        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            return \redirect()->to(\site_url('user/beli'));
        }

        return view('user/checkout', ['produk' => $produk, 'info' => $info]);
    }


    public function checkout()
    {
        echo view('navbar');
        echo view('footer');
        $session = session();
        if (!session()->has('logged')) {
            return redirect()->to(site_url('user/login'));
        }
        $id = $this->request->uri->getSegment(3);
        $produkModel = new \App\Models\ProductModel();
        $produk = $produkModel->find($id);
        return view('user/informasi', [
            'produk' => $produk,
        ]);
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return \redirect()->to(\site_url('home'));
    }

    public function transaksi()
    {
        if (!session()->has('logged')) {
            return redirect()->to(site_url('user/login'));
        }
        $session = session();
        $transaksiModel = new \App\Models\TransaksiModel();
        $userModel = new \App\Models\UserModel();
        $transaksi = new \App\Entities\Transaksi();
        $data = $session->get('id_user');
        $pengguna = $userModel->find($data);
        $cari = $transaksiModel->where('id_user', $data)->findAll();
        echo view('navbar');
        echo view('footer');
        return view('user/transaksi', ['cari' => $cari, 'pengguna' => $pengguna]);
    }


    public function jadwal()
    {
        echo view('navbar');
        $jadwalModel = new \App\Models\JadwalModel();
        $data = $jadwalModel->findAll();
        return view('user/jadwal', ['data' => $data]);
    }


    //--------------------------------------------------------------------

}
