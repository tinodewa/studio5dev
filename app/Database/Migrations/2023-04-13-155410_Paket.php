<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Paket extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_paket' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'auto_increment' => true,
            ],
            'nama_paket' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'harga_paket' => [
                'type'       => 'INT',
                'constraint' => '50',
            ],
            'fotografer' => [
                'type'       => 'INT',
                'constraint' => '50',
            ],
            'videografer' => [
                'type'       => 'INT',
                'constraint' => '50',
            ],
            'asisten' => [
                'type'       => 'INT',
                'constraint' => '50',
            ],
            'waktu_kerja' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'jumlah_foto' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'jumlah_foto_edit' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'cetak_foto' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'videografi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'penyimpanan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'note' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'deskripsi_paket' => [
                'type'       => 'TEXT',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id_paket', true);
        $this->forge->createTable('paket');
    }

    public function down()
    {
        $this->forge->dropTable('paket');
    }
}
