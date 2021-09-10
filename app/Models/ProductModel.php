<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id_paket';
    protected $allowedFields = [
        'nama_paket', 'deskripsi_paket', 'kategori_paket', 'harga', 'gambar'
    ];
    protected $returnType = 'App\Entities\Product';
    protected $useTimestamps = false;
}
