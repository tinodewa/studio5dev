<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HasilFoto;
use App\Models\Pembayaran;
use App\Models\PesananWithUserAndPaket;
use App\Models\PesananWithUserPaketAndPembayaran;
use App\Models\User;
use Midtrans\Config as MidtransConfig;
use Midtrans\Snap;
use Midtrans\Transaction;

class Fotografer extends BaseController
{
    public function index()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/home/admin');
            } else if ($session->get('role') == 'user') {
                return redirect()->to('/login');
            } else if ($session->get('role') == 'fotografer') {
                helper('number');
                $data['title'] = 'Penerimaan Pesanan';

                $pesananUserPaketAndPembayaran = new PesananWithUserPaketAndPembayaran();
                $data['listPesanans'] = $pesananUserPaketAndPembayaran->getPesananWithUserPaketAndPembayaran();

                return view('pages/fotografer/index', $data);
            }
        }
        return redirect()->to('/login');
    }

    public function pesananDetail($id_pesanan)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/home/admin');
            } else if ($session->get('role') == 'user') {
                return redirect()->to('/');
            } else if ($session->get('role') == 'fotografer') {
                helper('number');
                $data['title'] = 'Detail Pesanan';

                // //Set Midtrans configuration
                $midtransConfig = new \Config\Midtrans();
                MidtransConfig::$serverKey = $midtransConfig->serverKey;
                MidtransConfig::$isProduction = $midtransConfig->isProduction;

                $pesananUserPaketAndPembayaran = new PesananWithUserPaketAndPembayaran();
                $data['detailPesanan'] = $pesananUserPaketAndPembayaran->getPesananWithUserPaketAndPembayaranById($id_pesanan);

                if ($data['detailPesanan'] != null) {
                    //get hasil foto
                    $hasilFoto = new HasilFoto();
                    $data['hasilFoto'] = $hasilFoto->getHasilFotoByIdPesanan($id_pesanan);

                    //get detail transaksi
                    $status = Transaction::status($data['detailPesanan'][0]->order_id);
                    $data['transaksi'] = $status;

                    return view('pages/fotografer/pesanan_detail.php', $data);
                } else {
                    return redirect()->to('/fotografer');
                }
            }
        }
        return redirect()->to('/login');
    }

    public function pesananDetailSimpanHasilFoto($id_pesanan)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/home/admin');
            } else if ($session->get('role') == 'user') {
                return redirect()->to('/');
            } else if ($session->get('role') == 'fotografer') {
                //get data pesanan, paket, user, dan pembayaran
                $pesananUserPaketAndPembayaran = new PesananWithUserPaketAndPembayaran();
                $data['detailPesanan'] = $pesananUserPaketAndPembayaran->getPesananWithUserPaketAndPembayaranById($id_pesanan);

                //rubah status di pembayaran menjadi done bleum review
                $pembayaran = new Pembayaran();
                $dataPembayaran = [
                    'status' => 'done, belum review',
                ];

                $pembayaran->update($data['detailPesanan'][0]->id_pembayaran, $dataPembayaran);

                //membuat data hasil foto yang didapatkan dari inputan fotografer
                $hasilFoto = new HasilFoto();
                $idHasilFoto = $this->request->getVar('id_hasil_foto');
                $linkHasilFoto = $this->request->getVar('hasil_foto');

                $dataHasilFoto = [
                    'id_fotografer' => $session->get('id_user'),
                    'hasil_foto' => $linkHasilFoto,
                ];

                $hasilFoto->update($idHasilFoto, $dataHasilFoto);

                return redirect()->to('/fotografer/pesanan/' . $id_pesanan . '/detail');
            }
        }
        return redirect()->to('/login');
    }

    public function profilFotografer()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/admin');
            } else if ($session->get('role') == 'user') {
                return redirect()->to('/');
            } else if ($session->get('role') == 'fotografer') {
                $data['title'] = 'Profil';

                $user = new User();
                $data['user'] = $user->find($session->get('id_user'));

                return view('pages/fotografer/profil_pengguna', $data);
            }
        }
        return redirect()->to('/login');
    }
}
