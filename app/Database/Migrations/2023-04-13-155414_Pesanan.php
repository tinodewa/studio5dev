<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pesanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pesanan' => [
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
            'nama_lengkap' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tanggal' => [
                'type'       => 'DATETIME',
            ],
            'telp' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat' => [
                'type'       => 'TEXT',
            ],
            'catatan' => [
                'type'       => 'TEXT',
            ],
            'extra_waktu_kerja' => [
                'type'           => 'INT',
                'constraint'     => 9,
            ],
            // magazine album 500(engagement), album magnetic(engagement) 250, premium magazine(akad) 400
            'extra_premium_magazine' => [
                'type'           => 'INT',
                'constraint'     => 9,
            ],
            // prewedding indoor-maternity-wisuda-family-couple 50, personal 25
            'extra_background_dan_outfit' => [
                'type'           => 'INT',
                'constraint'     => 9,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id_pesanan', true);
        $this->forge->addForeignKey('id_user', 'user', 'id_user', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_paket', 'paket', 'id_paket', 'CASCADE', 'CASCADE');
        $this->forge->createTable('pesanan');
    }

    public function down()
    {
        $this->forge->dropTable('pesanan');
    }
}
