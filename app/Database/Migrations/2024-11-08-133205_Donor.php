<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Donor extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_donor' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'id_petugas' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'id_assesmen' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'Tanggal' => [
                'type' => 'DATE',
                'null' => true
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
        $this->forge->addKey('id_donor', true);
        $this->forge->createTable('donor');
    }

    public function down()
    {
        $this->forge->dropTable('donor');
    }
}
