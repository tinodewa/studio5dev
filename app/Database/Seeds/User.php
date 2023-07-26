<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_user' => 1,
                'email' => 'admin@gmail.com',
                'nama_lengkap'  => 'admin',
                'no_telp' => '089876543210',
                'password' => '$2y$10$4moqnsuMxhf6CAH45GqC7u0.h.ue4hXnpLMUFBe4YZ9JwhtKGCQYe', //12345678
                'role' => 'admin',
                'foto_profil' => '',
            ],
            [
                'id_user' => 2,
                'email' => 'user@gmail.com',
                'nama_lengkap'  => 'user saya',
                'no_telp' => '089876543210',
                'password' => '$2y$10$4moqnsuMxhf6CAH45GqC7u0.h.ue4hXnpLMUFBe4YZ9JwhtKGCQYe', //12345678
                'role' => 'user',
                'foto_profil' => '1690152020_e8f4c3dde04dff00b565.jpg',
            ],
            [
                'id_user' => 3,
                'email' => 'fotografer@gmail.com',
                'nama_lengkap'  => 'fotografer',
                'no_telp' => '089876543210',
                'password' => '$2y$10$4moqnsuMxhf6CAH45GqC7u0.h.ue4hXnpLMUFBe4YZ9JwhtKGCQYe', //12345678
                'role' => 'fotografer',
                'foto_profil' => '',
            ]
        ];

        $this->db->table('user')->insertBatch($data);
    }
}
