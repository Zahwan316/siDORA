<?php

namespace App\Models;

use CodeIgniter\Model;

class Pendonor extends Model
{
    protected $table      = 'pendonor';
    protected $primaryKey = 'id_pendonor';
    protected $allowedFields = ['nama', 'email', 'password','alamat','jenis_kelamin','tempat_lahir',"tanggal_lahir","NIK","no_telpon",'gol_darah','rhesus'];

    protected $useTimestamps = true;
    
    public function getPendonorByEmail($email)
    {
        return $this->where('email', $email)->first();
    } 
}
