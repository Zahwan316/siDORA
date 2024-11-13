<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kuisioner extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id_kuisioner" => [
                "type" => "INT",
                'unsigned'       => true,
                'auto_increment' => true
            ],
            "id_registrasi" => [
                "type" => "INT",
                "null" => true
            ],
            "id_pendonor" => [
                "type" => "INT"
            ],
            "IC" => [
                "type" => "INT"
            ],
            "pertanyaan" => [
                "type" => "TEXT"
            ],
            "jawaban" => [
                "type" => "TEXT"
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
        $this->forge->addKey('id_kuisioner', true);
        $this->forge->createTable('kuisioner');
    }

    public function down()
    {
        //
    }
}
