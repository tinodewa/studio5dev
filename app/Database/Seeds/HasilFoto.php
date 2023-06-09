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
                'hasil_foto' => 'https://drive.google.com/drive/folders/11zGoAjnjZs4LwD5yLIDHWsgQwe0xk-2p?usp=sharing',
            ],
            [
                'id_hasil_foto' => 1,
                'id_fotografer' => 3,
                'id_pesanan'  => 2,
                'hasil_foto' => 'https://drive.google.com/drive/folders/11zGoAjnjZs4LwD5yLIDHWsgQwe0xk-2p?usp=sharing',
            ],
            [
                'id_hasil_foto' => 1,
                'id_fotografer' => 3,
                'id_pesanan'  => 3,
                'hasil_foto' => 'https://drive.google.com/drive/folders/11zGoAjnjZs4LwD5yLIDHWsgQwe0xk-2p?usp=sharing',
            ]
        ];

        $this->db->table('hasil_foto')->insert($data);
    }
}
