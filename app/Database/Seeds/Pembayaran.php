<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pembayaran extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_pembayaran' => 1,
                'id_pesanan' => 1,
                'order_id'  => 'ORDER-CUST-2-1687707343',
                'jumlah_bayar' => 4500000,
                'status' => 'done',
            ],
            [
                'id_pembayaran' => 2,
                'id_pesanan' => 2,
                'order_id'  => 'ORDER-CUST-2-1687707344',
                'jumlah_bayar' => 900000,
                'status' => 'done',
            ],
            [
                'id_pembayaran' => 3,
                'id_pesanan' => 3,
                'order_id'  => 'ORDER-CUST-2-1687707345',
                'jumlah_bayar' => 4500000,
                'status' => 'done',
            ],
        ];

        $this->db->table('pembayaran')->insertBatch($data);
    }
}
