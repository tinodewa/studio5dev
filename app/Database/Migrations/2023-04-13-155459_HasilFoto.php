<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HasilFoto extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_hasil_foto' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'auto_increment' => true,
            ],
            'id_fotografer' => [
                'type'           => 'INT',
                'constraint'     => 9,
            ],
            'id_pesanan' => [
                'type'           => 'INT',
                'constraint'     => 9,
            ],
            'hasil_foto' => [
                'type'       => 'TEXT',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id_hasil_foto', true);
        $this->forge->addForeignKey('id_fotografer', 'user', 'id_user', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_pesanan', 'pesanan', 'id_pesanan', 'CASCADE', 'CASCADE');
        $this->forge->createTable('hasil_foto');
    }

    public function down()
    {
        $this->forge->dropTable('hasil_foto');
    }
}
