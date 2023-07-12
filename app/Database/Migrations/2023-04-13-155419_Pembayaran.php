<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembayaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pembayaran' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'auto_increment' => true,
            ],
            'id_pesanan' => [
                'type'           => 'INT',
                'constraint'     => 9,
            ],
            'order_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'jumlah_bayar' => [
                'type'           => 'INT',
                'constraint'     => 15,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id_pembayaran', true);
        $this->forge->addForeignKey('id_pesanan', 'pesanan', 'id_pesanan', 'CASCADE', 'CASCADE');
        $this->forge->createTable('pembayaran');
    }

    public function down()
    {
        $this->forge->dropTable('pembayaran');
    }
}
