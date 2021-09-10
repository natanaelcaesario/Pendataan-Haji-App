<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table = 'jadwal';
    protected $primaryKey = 'id_jadwal';
    protected $allowedFields = [
        'nama_pembimbing', 'tanggal', 'waktu', 'tempat', 'keterangan'
    ];
    protected $returnType = 'App\Entities\Jadwal';
    protected $useTimestamps = false;
}
