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
                'id_paket' => 19,
                'nama_lengkap' => 'Angga',
                'tanggal' => '2023-07-21 01:55:00',
                'telp' => '082112344321',
                'alamat'  => 'Malang',
                'catatan' => '',
                'extra_waktu_kerja' => '0',
                'extra_premium_magazine' => '0',
                'extra_background' => '0',
                'extra_tempat' => '0',
                'extra_orang' => '0',
                'extra_wisudawan' => '0',
            ],
            [
                'id_pesanan' => 4,
                'id_user' => 2,
                'id_paket' => 17,
                'nama_lengkap' => 'Azhar Maulana',
                'tanggal' => '2023-07-28 17:53:00',
                'telp' => '082112344321',
                'alamat'  => 'Singosari',
                'catatan' => '',
                'extra_waktu_kerja' => '0',
                'extra_premium_magazine' => '0',
                'extra_background' => '0',
                'extra_tempat' => '0',
                'extra_orang' => '36',
                'extra_wisudawan' => '0',
            ],
            [
                'id_pesanan' => 5,
                'id_user' => 2,
                'id_paket' => 17,
                'nama_lengkap' => 'Azhar Maulana',
                'tanggal' => '2023-07-21 01:30:00',
                'telp' => '082112344321',
                'alamat'  => 'Singosari',
                'catatan' => '',
                'extra_waktu_kerja' => '0',
                'extra_premium_magazine' => '0',
                'extra_background' => '0',
                'extra_tempat' => '0',
                'extra_orang' => '0',
                'extra_wisudawan' => '0',
            ],
            [
                'id_pesanan' => 11,
                'id_user' => 2,
                'id_paket' => 19,
                'nama_lengkap' => 'user saya',
                'tanggal' => '2023-07-27 16:30:00',
                'telp' => '082112344321',
                'alamat'  => 'Singosari',
                'catatan' => '',
                'extra_waktu_kerja' => '1',
                'extra_premium_magazine' => '0',
                'extra_background' => '1',
                'extra_tempat' => '0',
                'extra_orang' => '1',
                'extra_wisudawan' => '1',
            ],
        ];

        $this->db->table('pesanan')->insertBatch($data);
    }
}
