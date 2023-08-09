<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class HasilFoto extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_hasil_foto' => 1,
                'id_fotografer' => 3,
                'id_pesanan'  => 1,
                'hasil_foto' => 'https://drive.google.com/file/d/1Qkb5W-hgNpHOYgbZe2HAD0ADzkJGrcF2/view?usp=sharing',
            ],
            [
                'id_hasil_foto' => 2,
                'id_fotografer' => 3,
                'id_pesanan'  => 4,
                'hasil_foto' => '',
            ],
            [
                'id_hasil_foto' => 3,
                'id_fotografer' => 3,
                'id_pesanan'  => 5,
                'hasil_foto' => '',
            ],
            [
                'id_hasil_foto' => 4,
                'id_fotografer' => 3,
                'id_pesanan'  => 12,
                'hasil_foto' => '',
            ],
            [
                'id_hasil_foto' => 5,
                'id_fotografer' => 3,
                'id_pesanan'  => 13,
                'hasil_foto' => '',
            ],
            [
                'id_hasil_foto' => 6,
                'id_fotografer' => 3,
                'id_pesanan'  => 14,
                'hasil_foto' => '',
            ],
            [
                'id_hasil_foto' => 7,
                'id_fotografer' => 3,
                'id_pesanan'  => 15,
                'hasil_foto' => '',
            ]
        ];

        $this->db->table('hasil_foto')->insertBatch($data);
    }
}
