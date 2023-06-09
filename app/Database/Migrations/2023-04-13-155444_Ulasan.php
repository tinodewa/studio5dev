<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ulasan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ulasan' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'auto_increment' => true,
            ],
            'id_user' => [
                'type'           => 'INT',
                'constraint'     => 9,
            ],
            'id_paket' => [
                'type'           => 'INT',
                'constraint'     => 9,
            ],
            'tanggal' => [
                'type'       => 'DATE',
            ],
            'deskripsi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'bintang' => [
                'type'       => 'FLOAT',
                'constraint' => 9,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id_ulasan', true);
        $this->forge->addForeignKey('id_user', 'user', 'id_user', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_paket', 'paket', 'id_paket', 'CASCADE', 'CASCADE');
        $this->forge->createTable('ulasan');
    }

    public function down()
    {
        $this->forge->dropTable('ulasan');
    }
}
