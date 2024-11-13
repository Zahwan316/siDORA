<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Assesment extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_assesment' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'id_cek_darah' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'id_pendonor' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'id_petugas' => [
                'type' => 'INT',
            ],
            'suhu' => [
                'type' => 'FLOAT',
            ],
            'hb' => [
                'type' => 'INT',
            ],
            'td' => [
                'type' => 'INT',
            ],
            'tanggal_assesment' => [
                'type' => 'DATE',
            ],
            'riwayat_penyakit' => [
                'type' => 'INT',
            ],
            'status_layak_donor' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type' => "DATE",
                'null' => false
            ],
            'updated_at' => [
                'type' => "DATE",
                'null' => false
            ],
        ]);
        $this->forge->addKey('id_assesment', true);
        $this->forge->createTable('assesment');
    }

    public function down()
    {
        $this->forge->dropTable('assesment');
    }
}
