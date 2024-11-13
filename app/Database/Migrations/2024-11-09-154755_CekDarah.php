<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CekDarah extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_cek' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'id_petugas' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'id_pendonor' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'gol_darah' => [
                'type' => 'CHAR',
            ],
            'rhesus' => [
                'type' => 'VARCHAR',
                'constraint' => 3,
            ],
            'waktu' => [
                'type' => 'TIME',
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
        $this->forge->addKey('id_cek', true);
        $this->forge->createTable('cek_darah');
    }

    public function down()
    {
        $this->forge->dropTable('cek_darah');
    }
}
