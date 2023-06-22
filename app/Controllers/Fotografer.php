<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HasilFoto;
use App\Models\Pembayaran;
use App\Models\PesananWithUserAndPaket;
use App\Models\PesananWithUserPaketAndPembayaran;

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

                $pesananUserPaketAndPembayaran = new PesananWithUserPaketAndPembayaran();
                $data['detailPesanan'] = $pesananUserPaketAndPembayaran->getPesananWithUserPaketAndPembayaranById($id_pesanan);

                $hasilFoto = new HasilFoto();
                $data['hasilFoto'] = $hasilFoto->getHasilFotoByIdPesanan($id_pesanan);

                return view('pages/fotografer/pesanan_detail.php', $data);
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
                    'status' => 'done belum review',
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
}
