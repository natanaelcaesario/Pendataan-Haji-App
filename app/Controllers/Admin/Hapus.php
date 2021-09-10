<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;


class Hapus extends BaseController
{
    public function hapususer()
    {
        $id = $this->request->uri->getSegment(3);
        $userModel = new \App\Models\UserModel();
        $userModel->delete(['id_user' => $id]);
        return \redirect()->to(\site_url('admin/pengguna'));
    }
}
