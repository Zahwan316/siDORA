<?php

namespace App\Models;

use CodeIgniter\Model;

class Petugas extends Model
{
    protected $table      = 'petugas';
    protected $primaryKey = 'id_petugas';
    protected $allowedFields = ['username', 'email', 'password', 'NIP'];

    protected $useTimestamps = true;

    public function getPendonorByEmail($email)
    {
        return $this->where('email', $email)->first();
    } 
}
