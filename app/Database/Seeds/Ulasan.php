<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Ulasan extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_ulasan' => 1,
                'id_user' => 2,
                'id_paket' => 1,
                'tanggal' => '2023-04-15',
                'deskripsi'  => 'Foto sangat bagus dan fotografer ramah.',
                'bintang' => 5.0,
            ], [
                'id_ulasan' => 2,
                'id_user' => 2,
                'id_paket' => 2,
                'tanggal' => '2023-04-15',
                'deskripsi'  => 'Foto sangat bagus dan fotografer ramah.',
                'bintang' => 5.0,
            ], [
                'id_ulasan' => 3,
                'id_user' => 2,
                'id_paket' => 3,
                'tanggal' => '2023-04-15',
                'deskripsi'  => 'Foto sangat bagus dan fotografer ramah.',
                'bintang' => 5.0,
            ], [
                'id_ulasan' => 4,
                'id_user' => 2,
                'id_paket' => 4,
                'tanggal' => '2023-04-15',
                'deskripsi'  => 'Foto sangat bagus dan fotografer ramah.',
                'bintang' => 5.0,
            ], [
                'id_ulasan' => 5,
                'id_user' => 2,
                'id_paket' => 5,
                'tanggal' => '2023-04-15',
                'deskripsi'  => 'Foto sangat bagus dan fotografer ramah.',
                'bintang' => 5.0,
            ], [
                'id_ulasan' => 6,
                'id_user' => 2,
                'id_paket' => 6,
                'tanggal' => '2023-04-15',
                'deskripsi'  => 'Foto sangat bagus dan fotografer ramah.',
                'bintang' => 5.0,
            ], [
                'id_ulasan' => 7,
                'id_user' => 2,
                'id_paket' => 7,
                'tanggal' => '2023-04-15',
                'deskripsi'  => 'Foto sangat bagus dan fotografer ramah.',
                'bintang' => 5.0,
            ], [
                'id_ulasan' => 8,
                'id_user' => 2,
                'id_paket' => 8,
                'tanggal' => '2023-04-15',
                'deskripsi'  => 'Foto sangat bagus dan fotografer ramah.',
                'bintang' => 5.0,
            ],
        ];

        $this->db->table('ulasan')->insertBatch($data);
    }
}
