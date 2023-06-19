<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Paket as ModelsPaket;
use CodeIgniter\API\ResponseTrait;

class AdminPaketController extends BaseController
{

    //all paket
    public function index()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $data['title'] = 'Paket';
                $paket = new ModelsPaket();
                $data['pakets'] = $paket->orderBy('id_paket', 'ASC')->findAll();

                return view('pages/admin/paket/index', $data);
            } else if ($session->get('role') == 'user') {
                return redirect()->to('/');
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
            }
        }
        $data['title'] = 'Beranda';
        return redirect()->to('/');
    }

    //new
    public function new()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $data['title'] = 'Tambah Paket';
                return view('pages/admin/paket/tambah', $data);
            } else if ($session->get('role') == 'user') {
                return redirect()->to('/');
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
            }
        }
        $data['title'] = 'Beranda';
        return redirect()->to('/');
    }

    // create
    public function create()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $paket = new ModelsPaket();
                $nama_paket = $this->request->getVar('nama_paket');
                $jumlah_fotografer = $this->request->getVar('jumlah_fotografer');
                $jumlah_videografer = $this->request->getVar('jumlah_videografer');
                $waktu_liputan = $this->request->getVar('waktu_liputan');
                $jumlah_indoor = $this->request->getVar('jumlah_indoor');
                $jumlah_outdoor = $this->request->getVar('jumlah_outdoor');
                $hasil_jumlah = $this->request->getVar('hasil_jumlah');
                $hasil_editing = $this->request->getVar('hasil_editing');

                $harga_fotografer = 400000 * $jumlah_fotografer;
                $harga_videografer = 500000 * $jumlah_videografer;
                $harga_liputan_perjam = 100000 * $waktu_liputan;
                $harga_indoor = 50000 * $jumlah_indoor;
                $harga_outdoor = 100000 * $jumlah_outdoor;
                $harga_jumlah_cetak = 50000 * $hasil_jumlah;
                $harga_jumlah_editing = 20000 * $hasil_editing;

                $harga_paket_custom = $harga_fotografer + $harga_videografer + $harga_liputan_perjam + $harga_indoor + $harga_outdoor + $harga_jumlah_cetak + $harga_jumlah_editing;

                $dataPaket = [
                    'nama_paket' => $nama_paket,
                    'warna_nama_paket' => '#0abde3',
                    'gambar_paket' => 'pexels-camera.jpg',
                    'harga_paket' => $harga_paket_custom,
                    'keterangan_harga_paket' => 1,
                    'status_paket' => 0,
                    'fotografer' => $jumlah_fotografer,
                    'videografer' => $jumlah_videografer,
                    'waktu' => $waktu_liputan,
                    'dua_tempat' => false,
                    'tempat_indoor' => $jumlah_indoor,
                    'tempat_outdoor' => $jumlah_outdoor,
                    'hasil_jumlah' => $hasil_jumlah,
                    'hasil_ukuran_cetak' => '30 x 40',
                    'hasil_editing' => $hasil_editing,
                    'hasil_cinematic' => false,
                    'kapasitas' => 'Unlimited soft file mentah dikirim Gdrive.',
                    'deskripsi_paket' => 'Paket Custom Sesuai Dengan Kebutuhan Kamu',
                ];

                $paket->insert($dataPaket);

                return redirect()->to('/admin/paket');
            } else if ($session->get('role') == 'user') {
                return redirect()->to('/');
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
            }
        }
        $data['title'] = 'Beranda';
        return redirect()->to('/');
    }

    //edit page
    public function edit($id_paket = null)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $data['title'] = 'Edit Paket';

                //get paket yang akan di edit
                $paket = new ModelsPaket();
                $data['paket'] = $paket->find($id_paket);

                // get pesanan
                // $pesanan = new Pesanan();
                // $data['pesanans'] = $pesanan->orderBy('id_pesanan', 'ASC')->findAll();


                return view('pages/admin/paket/edit', $data);
            } else if ($session->get('role') == 'user') {
                return redirect()->to('/');
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
            }
        }
        $data['title'] = 'Beranda';
        return redirect()->to('/');
    }

    // update
    public function update($id_paket = null)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $paket = new ModelsPaket();

                $id_paket = $this->request->getVar('id');
                $nama_paket = $this->request->getVar('nama_paket');
                $jumlah_fotografer = $this->request->getVar('jumlah_fotografer');
                $jumlah_videografer = $this->request->getVar('jumlah_videografer');
                $waktu_liputan = $this->request->getVar('waktu_liputan');
                $jumlah_indoor = $this->request->getVar('jumlah_indoor');
                $jumlah_outdoor = $this->request->getVar('jumlah_outdoor');
                $hasil_jumlah = $this->request->getVar('hasil_jumlah');
                $hasil_editing = $this->request->getVar('hasil_editing');

                $harga_fotografer = 400000 * $jumlah_fotografer;
                $harga_videografer = 500000 * $jumlah_videografer;
                $harga_liputan_perjam = 100000 * $waktu_liputan;
                $harga_indoor = 50000 * $jumlah_indoor;
                $harga_outdoor = 100000 * $jumlah_outdoor;
                $harga_jumlah_cetak = 50000 * $hasil_jumlah;
                $harga_jumlah_editing = 20000 * $hasil_editing;

                $harga_paket_custom = $harga_fotografer + $harga_videografer + $harga_liputan_perjam + $harga_indoor + $harga_outdoor + $harga_jumlah_cetak + $harga_jumlah_editing;

                $dataPaket = [
                    'nama_paket' => $nama_paket,
                    'warna_nama_paket' => '#0abde3',
                    'gambar_paket' => 'pexels-camera.jpg',
                    'harga_paket' => $harga_paket_custom,
                    'keterangan_harga_paket' => 1,
                    'status_paket' => 0,
                    'fotografer' => $jumlah_fotografer,
                    'videografer' => $jumlah_videografer,
                    'waktu' => $waktu_liputan,
                    'dua_tempat' => false,
                    'tempat_indoor' => $jumlah_indoor,
                    'tempat_outdoor' => $jumlah_outdoor,
                    'hasil_jumlah' => $hasil_jumlah,
                    'hasil_ukuran_cetak' => '30 x 40',
                    'hasil_editing' => $hasil_editing,
                    'hasil_cinematic' => false,
                    'kapasitas' => 'Unlimited soft file mentah dikirim Gdrive.',
                    'deskripsi_paket' => 'Paket Custom Sesuai Dengan Kebutuhan Kamu',
                ];

                $paket->update($id_paket, $dataPaket);

                return redirect()->to('/admin/paket');
            } else if ($session->get('role') == 'user') {
                return redirect()->to('/');
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
            }
        }
        $data['title'] = 'Beranda';
        return redirect()->to('/');
    }

    // delete
    public function delete($id_paket = null)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                try {
                    $paket = new ModelsPaket();
                    $id_paket = $this->request->getVar('$id_paket');

                    $deleted = $paket->where('id_paket', $id_paket)->delete();

                    if ($deleted) {
                        return $this->response->setJSON(['status' => 'Data berhasil dihapus!']);
                    } else {
                        return $this->response->setJSON(['status' => 'Data gagal dihapus!']);
                    }
                } catch (\Exception $e) {
                    return $this->response->setJSON(['error' => $e]);
                }
            } else if ($session->get('role') == 'user') {
                return redirect()->to('/');
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
            }
        }
        return redirect()->to('/login');
    }
}
