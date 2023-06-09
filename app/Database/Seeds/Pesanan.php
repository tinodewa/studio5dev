<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pesanan extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_pesanan' => 1,
                'id_user' => 2,
                'id_paket' => 1,
                'nama_lengkap' => 'Azhar Maulana',
                'tanggal' => '2023-04-15',
                'telp' => '081872193122',
                'alamat'  => 'Jl Mayjen Sungkono',
                'catatan' => '',
            ],
            [
                'id_pesanan' => 2,
                'id_user' => 2,
                'id_paket' => 1,
                'nama_lengkap' => 'Azhar Maulana',
                'tanggal' => '2023-04-15',
                'telp' => '081872193122',
                'alamat'  => 'Jl KH Malik Dalam',
                'catatan' => '',
            ],
            [
                'id_pesanan' => 3,
                'id_user' => 2,
                'id_paket' => 6,
                'nama_lengkap' => 'Azhar Maulana',
                'tanggal' => '2023-04-15',
                'telp' => '081872193122',
                'alamat'  => 'Jl Mayjen Sungkono',
                'catatan' => '',
            ],
        ];

        $this->db->table('pesanan')->insertBatch($data);
    }
}
