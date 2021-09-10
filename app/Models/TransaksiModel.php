<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $allowedFields = [
        'id_transaksi', 'id_user', 'paket_dipilih', 'bank', 'status', 'bukti_bayar', 'tanggal', 'total'
    ];
    protected $returnType = 'App\Entities\Transaksi';
    protected $useTimestamps = false;
}
