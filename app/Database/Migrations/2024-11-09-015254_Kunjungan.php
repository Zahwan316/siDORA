<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kunjungan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kunjungan' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'id_kuisioner' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'id_pendonor' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'tanggal_kunjungan' => [
                'type' => 'DATE',
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
        $this->forge->addKey('id_kunjungan', true);
        $this->forge->createTable('kunjungan');
    }

    public function down()
    {
        $this->forge->dropTable('kunjungan');
    }
}
