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
            'warna_nama_paket' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'gambar_paket' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'harga_paket' => [
                'type'       => 'INT',
                'constraint' => '50',
            ],
            'keterangan_harga_paket' => [
                'type'       => 'INT',
                'constraint' => '50',
            ],
            'status_paket' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'fotografer' => [
                'type'       => 'INT',
                'constraint' => '50',
            ],
            'videografer' => [
                'type'       => 'INT',
                'constraint' => '50',
            ],
            'waktu' => [
                'type'       => 'INT',
                'constraint' => '50',
            ],
            'dua_tempat' => [
                'type'      => 'BOOLEAN',
            ],
            'tempat_indoor' => [
                'type'       => 'INT',
                'constraint' => '50',
            ],
            'tempat_outdoor' => [
                'type'       => 'INT',
                'constraint' => '50',
            ],
            'hasil_jumlah' => [
                'type'       => 'INT',
                'constraint' => '50',
            ],
            'hasil_ukuran_cetak' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'hasil_editing' => [
                'type'       => 'INT',
                'constraint' => '50',
            ],
            'hasil_cinematic' => [
                'type'       => 'BOOLEAN',
            ],
            'kapasitas' => [
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
