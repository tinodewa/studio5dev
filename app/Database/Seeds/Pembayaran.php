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
                'order_id'  => 'ORDER-CUST-2-1689620147',
                'jumlah_bayar' => 275000,
                'status' => 'done, sudah review',
            ],
            [
                'id_pembayaran' => 2,
                'id_pesanan' => 4,
                'order_id'  => 'ORDER-CUST-2-1689936826',
                'jumlah_bayar' => 1590000,
                'status' => 'dalam proses',
            ],
            [
                'id_pembayaran' => 3,
                'id_pesanan' => 5,
                'order_id'  => 'ORDER-CUST-2-1690169503',
                'jumlah_bayar' => 150000,
                'status' => 'expire',
            ],
            [
                'id_pembayaran' => 4,
                'id_pesanan' => 12,
                'order_id'  => 'ORDER-CUST-2-1691379224',
                'jumlah_bayar' => 420000,
                'status' => 'dalam proses',
            ],
            [
                'id_pembayaran' => 5,
                'id_pesanan' => 13,
                'order_id'  => 'ORDER-CUST-2-1691379858',
                'jumlah_bayar' => 2400000,
                'status' => 'dalam proses',
            ],
            [
                'id_pembayaran' => 6,
                'id_pesanan' => 14,
                'order_id'  => 'ORDER-CUST-2-1691380203',
                'jumlah_bayar' => 600000,
                'status' => 'dalam proses',
            ],
            [
                'id_pembayaran' => 7,
                'id_pesanan' => 15,
                'order_id'  => 'ORDER-CUST-2-1691382060',
                'jumlah_bayar' => 750000,
                'status' => 'pending',
            ],
        ];

        $this->db->table('pembayaran')->insertBatch($data);
    }
}
