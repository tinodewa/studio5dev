<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HasilFoto;
use App\Models\Paket;
use App\Models\Pembayaran;
use App\Models\Pesanan;
use App\Models\PesananWithUserAndPaket;
use App\Models\PesananWithUserPaketAndPembayaran;
use App\Models\Ulasan;
use CodeIgniter\Database\Exceptions\DataException;
use PhpParser\Node\Expr\Cast\String_;

class HomeUser extends BaseController
{
    public function index()
    {
        $session = session();
        helper('number');
        helper('text');

        $data['title'] = 'Home Page';
        $paket = new Paket();
        $data['pakets'] = $paket->where('id_paket <=', 8)->orderBy('id_paket', 'ASC')->findAll();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/home/admin');
            } else if ($session->get('role') == 'user') {
                $data['title'] = 'Beranda';
                return view('pages/user/index', $data);
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
            }
        }
        $data['title'] = 'Beranda';
        return view('pages/user/index', $data);
    }

    public function paketDetail($id_paket)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/home/admin');
            } else if ($session->get('role') == 'user') {
                helper('number');
                $data['title'] = 'Detail Paket';

                $paket = new Paket();
                $data['paket'] = $paket->find($id_paket);

                return view('pages/user/paket_detail', $data);
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/home/fotografer');
            }
        }
        return redirect()->to('/login');
    }

    public function paketMasukKeranjang()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/home/admin');
            } else if ($session->get('role') == 'user') {
                helper('number');
                $data['title'] = 'Detail Paket';

                //data
                $pesanan = new Pesanan();
                $id_paket = $this->request->getVar('id_paket');
                $type = $this->request->getVar('type');

                $data = [
                    'id_user' => $session->get('id_user'),
                    'id_paket' => $id_paket,
                ];

                $pesanan->insert($data);

                if ($type == 'pesan') {
                    return redirect()->to('/checkout');
                } else if ($type == 'keranjang') {
                    return $this->response->setJSON(['status' => 'success']);
                }
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/home/fotografer');
            }
        }
        return redirect()->to('/login');
    }

    public function paketPesan($id_paket)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/home/admin');
            } else if ($session->get('role') == 'user') {
                helper('number');
                $data['title'] = 'Detail Paket';

                //data
                $pesanan = new Pesanan();

                $data = [
                    'id_user' => $session->get('id_user'),
                    'id_paket' => $id_paket,
                ];

                $pesanan->insert($data);

                return redirect()->to('/checkout');
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/home/fotografer');
            }
        }
        return redirect()->to('/login');
    }

    public function checkoutPesanan()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/home/admin');
            } else if ($session->get('role') == 'user') {
                helper('number');
                $data['title'] = 'Checkout Paket';

                $pesananUserPaket = new PesananWithUserAndPaket();
                $data['pesananUserPakets'] = $pesananUserPaket->getPesananWithUserAndPaketInCartByIduser($session->get('id_user'));

                return view('pages/user/checkout_pesanan', $data);
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/home/fotografer');
            }
        }
        return redirect()->to('/login');
    }

    public function checkoutSimpanPesanan()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/home/admin');
            } else if ($session->get('role') == 'user') {
                $pesanan = new Pesanan();
                $pembayaran = new Pembayaran();
                $paket = new Paket();
                $hasilFoto = new HasilFoto();

                $nama = $this->request->getVar('nama');
                $alamat = $this->request->getVar('alamat');
                $tanggal = $this->request->getVar('tanggal');
                $telp = $this->request->getVar('telp');
                $catatan = $this->request->getVar('catatan');

                $pesanans = $pesanan->getCheckoutPesananByIduser($session->get('id_user'));

                foreach ($pesanans as $row) {
                    //mengubah data pesanan
                    $dataPesanan = [
                        'id_user' => $row->id_user,
                        'id_paket' => $row->id_paket,
                        'nama_lengkap' => $nama,
                        'tanggal' => $tanggal,
                        'telp' => $telp,
                        'alamat' => $alamat,
                        'catatan' => $catatan,
                    ];

                    $pesanan->update($row->id_pesanan, $dataPesanan);

                    //mengirim data pembayaran
                    $pakets = $paket->find($row->id_paket);

                    $dataPembayaran = [
                        'id_pesanan' => $row->id_pesanan,
                        'jumlah_bayar' => $pakets->harga_paket,
                        'status' => 'belum dibayar',
                    ];

                    $pembayaran->insert($dataPembayaran);

                    //mengirim data untuk hasil foto
                    $dataHasilFoto = [
                        'id_fotografer' => 3,
                        'id_pesanan' => $row->id_pesanan,
                    ];

                    $hasilFoto->insert($dataHasilFoto);
                }

                return redirect()->to('/list-pesanan');
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/home/fotografer');
            }
        }
        return redirect()->to('/login');
    }

    public function checkoutHapusKeranjang()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/home/admin');
            } else if ($session->get('role') == 'user') {
                //data
                try {
                    $pesanan = new Pesanan();
                    $id_pesanan = $this->request->getVar('id_pesanan');

                    $deleted = $pesanan->where('id_pesanan', $id_pesanan)->delete();

                    if ($deleted) {
                        return $this->response->setJSON(['status' => 'Data berhasil dihapus!']);
                    } else {
                        return $this->response->setJSON(['status' => 'Data gagal dihapus!']);
                    }
                } catch (\Exception $e) {
                    return $this->response->setJSON(['error' => $e]);
                }
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/home/fotografer');
            }
        }
        return redirect()->to('/login');
    }

    public function paketCustom($id_paket)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/home/admin');
            } else if ($session->get('role') == 'user') {
                helper('number');

                $data['title'] = 'Paket Custom';
                $paket = new Paket();
                $data['paket'] = $paket->find($id_paket);

                return view('pages/user/paket_custom', $data);
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/home/fotografer');
            }
        }
        return redirect()->to('/login');
    }

    public function paketSimpanCustom()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/home/admin');
            } else if ($session->get('role') == 'user') {
                helper('number');
                try {
                    //menyimpan data paket custom
                    $paket = new Paket();

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

                    $dataPaketCustom = [
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

                    $paket->insert($dataPaketCustom);
                    $newPaketId = $paket->getInsertID();

                    //menyimpan data pesanan dari paket custom yang baru dibuat
                    $pesanan = new Pesanan();

                    $dataPesananCustom = [
                        'id_user' => $session->get('id_user'),
                        'id_paket' => $newPaketId,
                    ];

                    $pesanan->insert($dataPesananCustom);

                    return redirect()->to('/checkout');
                } catch (DataException $e) {
                    return 'Error: ' . $e->getMessage();
                }



                // return redirect()->to('/checkout');
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/home/fotografer');
            }
        }
        return redirect()->to('/login');
    }

    public function listPesanan()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/home/admin');
            } else if ($session->get('role') == 'user') {
                helper('number');
                $data['title'] = 'Checkout Paket';

                $pesananUserPaketAndPembayaran = new PesananWithUserPaketAndPembayaran();
                $data['listPesanans'] = $pesananUserPaketAndPembayaran->getPesananWithUserPaketAndPembayaranByIdUser($session->get('id_user'));

                return view('pages/user/list_pesanan', $data);
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/home/fotografer');
            }
        }
        return redirect()->to('/login');
    }

    public function listPesananDetail($id_pesanan)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/home/admin');
            } else if ($session->get('role') == 'user') {
                helper('number');
                $data['title'] = 'Detail Paket';

                $pesananUserPaketAndPembayaran = new PesananWithUserPaketAndPembayaran();
                $data['detailPesanan'] = $pesananUserPaketAndPembayaran->getPesananWithUserPaketAndPembayaranById($id_pesanan);

                $hasilFoto = new HasilFoto();
                $data['hasilFoto'] = $hasilFoto->getHasilFotoByIdPesanan($id_pesanan);

                return view('pages/user/pesanan_detail.php', $data);
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/home/fotografer');
            }
        }
        return redirect()->to('/login');
    }

    public function simpanBukti($id_pesanan)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/home/admin');
            } else if ($session->get('role') == 'user') {
                helper('number');
                $data['title'] = 'Detail Pesanan';

                //data
                $pembayaran = new Pembayaran();
                $linkBukti = $this->request->getVar('bukti_pembayaran');
                $idPembayaran = $this->request->getVar('id_pembayaran');

                $dataBukti = [
                    'bukti' => $linkBukti,
                    'status' => 'sudah upload bukti',
                ];

                $pembayaran->update($idPembayaran, $dataBukti);

                return redirect()->to('/list-pesanan/' . $id_pesanan . '/detail');
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
            }
        }
        return redirect()->to('/login');
    }
}


// 20 x 25
// 20 x 30
// 25 x 38
// 30 x 40
// 50 x 60
// 60 x 80
// 75 x 100
