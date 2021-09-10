<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Bayar extends BaseController
{
    public function index()
    {
        $id = $this->request->uri->getSegment(3);
        $user_id = session()->get('id_user');
        $transaksiModel = new \App\Models\TransaksiModel();
        $userModel = new \App\Models\UserModel();
        $trans = new \App\Entities\Transaksi();
        $user = $userModel->find($user_id);
        $transaksi = $transaksiModel->find($id);
        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $trans = $transaksi->fill($data);
            $gambar = $this->request->getFile('bukti_bayar');
            $img = $gambar->getRandomName();
            $writepath = './uploads/bukti_bayar';
            $gambar->move($writepath, $img);
            $trans->bukti_bayar = $img;
            $trans->status = "Sedang Diproses";
            $transaksiModel->save($trans);
            $segments = ['user', 'bayar', $id];
            return redirect()->to(\base_url($segments));
        }
        echo view('navbar');
        echo view('footer');
        return view('user/bayar', ['transaksi' => $transaksi, 'user' => $user]);
    }
}
