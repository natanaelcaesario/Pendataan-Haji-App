<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = [
        'nama', 'ktp', 'email', 'password', 'nomerhandphone', 'foto', 'alamat',
        'foto_ktp', 'passport', 'suratnikah', 'pasfoto', 'verif', 'jenis_kelamin', 'kota', 'tanggal_lahir', 'kode_pelanggan'
    ];
    protected $returnType = 'App\Entities\User';
    protected $useTimestamps = false;
}
