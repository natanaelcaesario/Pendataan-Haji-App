<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;

class Tambah extends Controller
{
    public function index()
    {
        if (!session()->has('admin')) {
            return redirect()->to(site_url('admin/login'));
        }
        if ($this->request->getPost()) {
            $productModel = new \App\Models\ProductModel();
            $product = new \App\Entities\Product();
            $data = $this->request->getPost();
            $product->fill($data);
            $gambar = $this->request->getFile('gambar');
            $img = $gambar->getRandomName();
            $writepath = './uploads/gambar_produk';
            $gambar->move($writepath, $img);
            $product->gambar = $img;
            $productModel->save($product);
            return \redirect()->to(\site_url('admin/produk'));
        }
        echo view('admin/navbar');
        echo view('admin/navbar2');
        echo view('admin/tambah');
        echo view('admin/footer');
    }
}
