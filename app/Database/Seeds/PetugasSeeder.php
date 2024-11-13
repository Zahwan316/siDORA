<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PetugasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'email'    => 'admin@gmail.com',
                'password' => password_hash('12345678', PASSWORD_BCRYPT),
            ],
           
        ];

        // Insert data ke tabel 'users'
        $this->db->table('petugas')->insertBatch($data);
    }
}
