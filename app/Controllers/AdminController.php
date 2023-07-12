<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Paket;
use App\Models\Pembayaran;
use App\Models\Pesanan;
use App\Models\User;

class AdminController extends BaseController
{
    public function index()
    {
        $session = session();
        helper('number');

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $data['title'] = 'Beranda';
                $pesanan = new Pesanan();
                $pembayaran = new Pembayaran();
                $user = new User();

                $data['pakets'] = $pesanan->countAllResults();
                $data['pembayarans'] = $pembayaran->getSumJumlahBayarWithStatusDone();
                $data['users'] = $user->where('role', 'user')->countAllResults();

                return view('pages/admin/index', $data);
            } else if ($session->get('role') == 'user') {
                $data['title'] = 'Dashboard';
                return redirect()->to('/');
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/home/fotografer');
            }
        }
        $data['title'] = 'Beranda';
        return redirect()->to('/');
    }
}
