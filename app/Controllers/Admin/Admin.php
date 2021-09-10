<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;


class Admin extends BaseController
{
    public function index()
    {
        if (!session()->has('admin')) {
            return redirect()->to(site_url('admin/login'));
        }
        echo view('admin/navbar');
        echo view('admin/navbar2');
        // gabisa liat dashboard sblm login
        $adminModel = new \App\Models\AdminModel();
        $admin = new \App\Entities\Admin();
        $transaksiModel = new \App\Models\TransaksiModel();
        $transaksi = $transaksiModel->where('status', 'Lunas')
            ->findAll();

        $session = session();
        $data = $session->get('username');
        $adminModel->find($data);
        if (!$data) {
            return view('admin/login');
        }

        return view('admin/dashboard', ['transaksi' => $transaksi]);
    }

    public function all()
    {
        if (!session()->has('admin')) {
            return redirect()->to(site_url('admin/login'));
        }
        echo view('admin/navbar');
        echo view('admin/navbar2');
        $productModel = new \App\Models\ProductModel();
        $produk = $productModel->findAll();
        return view('admin/dataproduk', ['produk' => $produk]);
    }

    public function alltrans()
    {
        if (!session()->has('admin')) {
            return redirect()->to(site_url('admin/login'));
        }
        echo view('admin/navbar');
        echo view('admin/navbar2');
        $transaksiModel = new \App\Models\TransaksiModel();
        $db = \Config\Database::connect();
        $cari = $db->query("SELECT * FROM transaksi INNER JOIN user ON transaksi.id_user=user.id_user");
        $result = $cari->getResult();
        $transaksi = (object) $result;
        return view('admin/semuatransaksi', ['transaksi' => $transaksi]);
    }
    public function grafik()
    {
        $productModel = new \App\Models\ProductModel();
        $nilai = $productModel->findAll();
        $produk = (array) $nilai;
        // nilai
        $db = \Config\Database::connect();
        $cari = $db->query("SELECT COUNT(paket_dipilih) FROM transaksi WHERE paket_dipilih = 'Paket Umroh Regular 9 hari'");
        $cari1 = $db->query("SELECT COUNT(paket_dipilih) FROM transaksi WHERE paket_dipilih = 'Paket Umroh Awal Ramadhan'");
        $cari2 = $db->query("SELECT COUNT(paket_dipilih) FROM transaksi WHERE paket_dipilih = 'Paket Umrah 9H MILAD MIW'");
        $cari3 = $db->query("SELECT COUNT(paket_dipilih) FROM transaksi WHERE paket_dipilih = 'Paket Umroh Regular 9 hari 2'");
        $laki = $db->query("SELECT COUNT(*) FROM (SELECT jenis_kelamin FROM user INNER JOIN transaksi ON user.id_user = transaksi.id_user WHERE user.jenis_kelamin = 'laki-laki') AS NILAI");
        $perempuan = $db->query("SELECT COUNT(*) FROM (SELECT jenis_kelamin FROM user INNER JOIN transaksi ON user.id_user = transaksi.id_user WHERE user.jenis_kelamin = 'perempuan') AS NILAI");

        $result = $cari->getResult();
        $result1 = $cari1->getResult();
        $result2 = $cari2->getResult();
        $result3 = $cari3->getResult();
        $result4 = $laki->getResult();
        $result5 = $perempuan->getResult();

        $yuk = (array) $result;
        $yuk1 = (array) $result1;
        $yuk2 = (array) $result2;
        $yuk3 = (array) $result3;
        $yuk4 = (array) $result4;
        $yuk5 = (array) $result5;

        echo view('admin/navbar');
        echo view('admin/navbar2');
        return view('admin/grafik', ['produk' => $produk, 'yuk' => $yuk, 'yuk1' => $yuk1, 'yuk2' => $yuk2, 'yuk3' => $yuk3, 'yuk4' => $result4, 'yuk5' => $result5]);
    }
    public function allUsers()
    {
        if (!session()->has('admin')) {
            return redirect()->to(site_url('admin/login'));
        }
        echo view('admin/navbar');
        echo view('admin/navbar2');
        $userModel = new \App\Models\UserModel();
        $user = $userModel->findAll();
        return view('admin/datapengguna', ['user' => $user]);
    }

    public function transaksi()
    {
        if (!session()->has('admin')) {
            return redirect()->to(site_url('admin/login'));
        }
        $id = $this->request->uri->getSegment(3);

        $transaksiModel = new \App\Models\TransaksiModel();
        $userModel = new \App\Models\UserModel();
        $transaksi = $transaksiModel->find($id);
        $user = $transaksi->id_user;
        $cari = $userModel->find($user);
        if ($this->request->getPost()) {
            $info = $this->request->getPost();
            $data = [
                'status' => $info["status"]
            ];
            $transaksiModel->update($id, $data);
            header("Refresh:0;");
        }
        echo view('admin/navbar');
        echo view('admin/navbar2');
        return view('admin/transaksi', ['transaksi' => $transaksi, 'cari' => $cari]);
    }

    public function hapususer()
    {
        if (!session()->has('admin')) {
            return redirect()->to(site_url('admin/login'));
        }
        $id = $this->request->uri->getSegment(3);
        $userModel = new \App\Models\userModel();
        $userModel->delete(['id_user' => $id]);
        return \redirect()->to(\site_url('admin/pengguna'));
    }

    public function produk()
    {
        if (!session()->has('admin')) {
            return redirect()->to(site_url('admin/login'));
        }
        $id = $this->request->uri->getSegment(3);
        $productModel = new \App\Models\ProductModel();
        $product = new \App\Entities\Product();
        $produk = $productModel->find($id);
        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $gambar = $this->request->getFile('gambar');
            $img = $gambar->getRandomName();
            $writepath = './uploads/gambar_produk';
            $gambar->move($writepath, $img);
            $info = [
                'nama_paket' => $data["nama_paket"],
                'harga' => $data["harga"],
                'deskripsi_paket' => $data["deskripsi_paket"],
                'kategori_paket' => $data["kategori_paket"],
                'gambar' => $img
            ];

            $productModel->update($id, $info);
            header("Refresh:0;");
        }
        echo view('admin/navbar');
        echo view('admin/navbar2');
        return view('admin/editproduk', ['produk' => $produk]);
    }
    public function terima()
    {
        if (!session()->has('admin')) {
            return redirect()->to(site_url('admin/login'));
        }
        $id = $this->request->uri->getSegment(3);
        $transaksiModel = new \App\Models\TransaksiModel();
        $trans = new \App\Entities\Lunas();
        $transaksi = $transaksiModel->find($id);
        $current = $trans->status;
        $current->fill('Lunas')->$transaksi;
        $transaksiModel->save($trans);
        return view('admin/transaksi', ['transaksi' => $transaksi]);
    }
    public function hapusprod()
    {
        if (!session()->has('admin')) {
            return redirect()->to(site_url('admin/login'));
        }
        $id = $this->request->uri->getSegment(3);
        $produkModel = new \App\Models\ProductModel();
        $produkModel->delete(['id_paket' => $id]);
        return \redirect()->to(\site_url('admin/produk'));
    }

    public function hapustrans()
    {
        if (!session()->has('admin')) {
            return redirect()->to(site_url('admin/login'));
        }
        $id = $this->request->uri->getSegment(3);
        $transaksiModel = new \App\Models\TransaksiModel();
        $transaksiModel->delete(['id_transaksi' => $id]);
        return \redirect()->to(\site_url('admin/transaksi'));
    }


    public function tambahjadwal()
    {
        echo view('admin/navbar');
        echo view('admin/navbar2');
        if ($this->request->getPost()) {
            $jadwalModel = new \App\Models\JadwalModel();
            $jadwal = new \App\Entities\Jadwal();
            $data = $this->request->getPost();
            $jadwal->fill($data);
            $jadwalModel->save($jadwal);
            return redirect('admin');
        }
        echo view('admin/tambahjadwal');
        echo view('admin/footer');
    }

    public function keberangkatan()
    {
        echo view('admin/navbar');
        echo view('admin/navbar2');
        $jadwalModel = new \App\Models\JadwalModel();
        $jadwal = $jadwalModel->findAll();
        return view('admin/keberangkatan', ['jadwal' => $jadwal]);
    }

    public function hapusjadwal()
    {
        $id = $this->request->uri->getSegment(3);
        $jadwalModel = new \App\Models\jadwalModel();
        $jadwalModel->delete(['id_jadwal' => $id]);
        return \redirect()->to(\site_url('admin/keberangkatan'));
    }

    public function singleuser()
    {
        $id = $this->request->uri->getSegment(3);
        $userModel = new \App\Models\UserModel();
        $user = $userModel->where('id_user', $id)->first();
        if ($this->request->getPost()) {
            $status = $this->request->getPost();
            $apdet = [
                'verif' => $status
            ];
            $userModel->update($id, $apdet);
            return redirect()->to(site_url('admin/pengguna'));
        }

        echo view('admin/navbar');
        echo view('admin/navbar2');
        return view('admin/singleuser', ['user' => $user]);
    }
    public function laporan()
    {
        if ($this->request->getPost()) {
            $tglawal = $this->request->getPost('tglawal');
            $tglakhir = $this->request->getPost('tglakhir');
            $db = \Config\Database::connect();
            $gasken = $db->query("SELECT * FROM transaksi INNER JOIN user ON transaksi.id_user=user.id_user WHERE tanggal BETWEEN '$tglawal' AND '$tglakhir'");
            $result = $gasken->getResult();
            $obj = (object) $result;
            return view('admin/hasil', ['obj' => $obj]);
        }
        echo view('admin/navbar');
        echo view('admin/navbar2');
        return view('admin/laporan');
    }







    //--------------------------------------------------------------------

}
