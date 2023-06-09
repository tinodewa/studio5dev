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
            ],
            [
                'id_user' => 2,
                'email' => 'user@gmail.com',
                'nama_lengkap'  => 'user',
                'no_telp' => '089876543210',
                'password' => '$2y$10$4moqnsuMxhf6CAH45GqC7u0.h.ue4hXnpLMUFBe4YZ9JwhtKGCQYe', //12345678
                'role' => 'user',
            ],
            [
                'id_user' => 3,
                'email' => 'fotografer@gmail.com',
                'nama_lengkap'  => 'fotografer',
                'no_telp' => '089876543210',
                'password' => '$2y$10$4moqnsuMxhf6CAH45GqC7u0.h.ue4hXnpLMUFBe4YZ9JwhtKGCQYe', //12345678
                'role' => 'fotografer',
            ]
        ];

        $this->db->table('user')->insertBatch($data);
    }
}
