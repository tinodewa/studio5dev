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
                'type_pembayaran'  => 'Cash',
                'jumlah_bayar' => 1500000,
                'status' => 'done',
                'bukti' => 'Bukti pembayaran adam 1.jpeg',
            ],
            [
                'id_pembayaran' => 2,
                'id_pesanan' => 2,
                'type_pembayaran'  => 'Cash',
                'jumlah_bayar' => 3000000,
                'status' => 'done',
                'bukti' => 'Bukti pembayaran adam 1.jpeg',
            ],
            [
                'id_pembayaran' => 3,
                'id_pesanan' => 3,
                'type_pembayaran'  => 'Cash',
                'jumlah_bayar' => 900000,
                'status' => 'done',
                'bukti' => 'Bukti pembayaran adam 1.jpeg',
            ],
        ];

        $this->db->table('pembayaran')->insertBatch($data);
    }
}
