<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pendonor extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_pendonor' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true
            ],

            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'NIK' => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
                'null' => true
            ],

            'alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => '155',
                'null' => true
            ],

            'jenis_kelamin' => [
                'type'       => 'TINYINT',
                'constraint' => '1',
                'null' => true
            ],

            'tempat_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],

            'tanggal_lahir' => [
                'type' => 'DATE',
                'null' => true
            ],

            'no_telpon' => [
                'type' => 'VARCHAR',
                'constraint' => 14,
                'null' => true
            ],

            'gol_darah' => [
                'type' => 'CHAR',
                'constraint' => 2,
                'null' => true
            ],

            'rhesus' => [
                'type' => 'CHAR',
                'constraint' => 3,
                'null' => true
            ],

            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 80,
                'null' => false
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
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
        $this->forge->addKey('id_pendonor', true);
        $this->forge->createTable('pendonor');
    }

    public function down()
    {
        $this->forge->dropTable('pendonor');
    }
}
