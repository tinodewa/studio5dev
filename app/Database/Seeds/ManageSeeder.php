<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ManageSeeder extends Seeder
{
    public function run()
    {
        $this->call('User');
        $this->call('Paket');
        // $this->call('Pesanan');
        // $this->call('Pembayaran');
        $this->call('Ulasan');
        // $this->call('HasilFoto');
    }
}
