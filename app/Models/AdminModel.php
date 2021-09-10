<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    protected $allowedFields = [
        'username', 'password', 'role'
    ];
    protected $returnType = 'App\Entities\Admin';
    protected $useTimestamps = false;
}