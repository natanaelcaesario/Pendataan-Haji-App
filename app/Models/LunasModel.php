<?php

namespace App\Models;

use CodeIgniter\Model;

class LunasModel extends Model
{
    protected $table = 'transaksilunas';
    protected $primaryKey = 'id_lunas';
    protected $allowedFields = [
        'nama_jamaah', 'no_ktp', 'status', 'email', 'paket', 'bank', 'harga_paket'
    ];
    protected $returnType = 'App\Entities\Lunas';
    protected $useTimestamps = false;
}
