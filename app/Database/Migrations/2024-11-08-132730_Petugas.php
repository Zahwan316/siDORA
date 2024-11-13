<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Petugas extends Migration
{
    public function up()
    {
         //
         $this->forge->addField([
            'id_petugas' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'NIP' => [
                'type'       => 'TEXT',
                'constraint' => '18',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
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
        $this->forge->addKey('id_petugas', true);
        $this->forge->createTable('petugas');
    }

    public function down()
    {
        $this->forge->dropTable('petugas');
    }
}
