<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Beli extends BaseController
{

    public function index()
    {
        $id = session()->get("id_user");
        $transaksiModel = new \App\Models\TransaksiModel();
        $transaksi = new \App\Entities\Transaksi();
        $data = $this->request->getPost();
        $transaksi->fill($data);
        $transaksiModel->save($transaksi);
        return \redirect()->to(\site_url('user/transaksi'));
    }
}
