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
use App\Models\UlasanWithUser;
use App\Models\User;
use CodeIgniter\Database\Exceptions\DataException;
use CodeIgniter\I18n\Time;
use Midtrans\Config as MidtransConfig;
use Midtrans\Snap;
use Midtrans\Transaction;
use GuzzleHttp\Client;

class HomeUser extends BaseController
{
    public function index()
    {
        $session = session();
        helper('number');
        helper('text');

        $paket = new Paket();
        $ulasanUserPaket = new UlasanWithUser();
        $data['paketsEngagement'] = $paket->getPaketWithUlasan(26, 27);
        $data['paketsAkad'] = $paket->getPaketWithUlasan(6, 8);
        $data['paketsResepsi'] = $paket->getPaketWithUlasan(9, 13);
        $data['paketsPreweddingIndoor'] = $paket->getPaketWithUlasan(1, 1);
        $data['paketsPreweddingOutdoor'] = $paket->getPaketWithUlasan(2, 5);
        $data['paketsMaternity'] = $paket->getPaketWithUlasan(18, 18);
        $data['paketsGraduationIndoor'] = $paket->getPaketWithUlasan(19, 19);
        $data['paketsGraduationOutdoor'] = $paket->getPaketWithUlasan(20, 23);
        $data['paketsFamily'] = $paket->getPaketWithUlasan(24, 24);
        $data['paketsGroup'] = $paket->getPaketWithUlasan(16, 17);
        $data['paketsEvent'] = $paket->getPaketWithUlasan(25, 25);
        $data['paketsCouple'] = $paket->getPaketWithUlasan(28, 28);
        $data['paketsPersonal'] = $paket->getPaketWithUlasan(14, 15);
        $data['ulasanUserPakets'] = $ulasanUserPaket->getUlasanWithUserAndPaket();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/admin');
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
                return redirect()->to('/admin');
            } else if ($session->get('role') == 'user') {
                helper('number');
                $data['title'] = 'Detail Paket';

                $paket = new Paket();
                $data['paket'] = $paket->find($id_paket);

                return view('pages/user/paket_detail', $data);
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
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
                return redirect()->to('/admin');
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
                    return $this->response->setJSON(['status' => 'success']);
                } else if ($type == 'keranjang') {
                    return $this->response->setJSON(['status' => 'success']);
                }
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
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
                return redirect()->to('/admin');
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
                return redirect()->to('/fotografer');
            }
        }
        return redirect()->to('/login');
    }

    public function checkPesananIfExist()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/admin');
            } else if ($session->get('role') == 'user') {
                helper('number');
                $data['title'] = 'Checkout Pesanan';

                try {
                    $pesananUserPaket = new PesananWithUserAndPaket();
                    // $pesananUserPaketPembayaran = new PesananWithUserPaketAndPembayaran();
                    $data['pesananUserPaket'] = $pesananUserPaket->getPesananWithUserAndPaketInCartByIduser($session->get('id_user'));
                    // $data['pendingPesanan'] = $pesananUserPaketPembayaran->getPendingPesananByIdUser($session->get('id_user'));

                    if ($data['pesananUserPaket'] == null) {
                        return $this->response->setJSON(['status' => 'Belum ada pesanan!']);
                    } else {
                        return $this->response->setJSON(['status' => 'Sudah ada pesanan!']);
                    }
                } catch (\Exception $e) {
                    return $this->response->setJSON(['error' => $e]);
                }
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
            }
        }
        return $this->response->setJSON(['status' => 'Belum login!']);
    }

    public function checkPesananDatetimeIfExist()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/admin');
            } else if ($session->get('role') == 'user') {
                try {
                    $tanggalMulai = $this->request->getVar('tanggalMulai');
                    $tanggalSelesai = $this->request->getVar('tanggalSelesai');

                    $pesanan = new Pesanan();
                    $data['totalPesanan'] = $pesanan->getCountPesananByDateStartAndEnd($tanggalMulai, $tanggalSelesai);

                    if (sizeof($data['totalPesanan']) >= 4) {
                        return $this->response->setJSON(['status' => 'Penuh!', 'data' => $data['totalPesanan']]);
                    } else {
                        return $this->response->setJSON(['status' => 'Belum penuh!', 'data' => $data['totalPesanan']]);
                    }
                } catch (\Exception $e) {
                    return $this->response->setJSON(['error' => $e]);
                }
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
            }
        }
        return $this->response->setJSON(['status' => 'Belum login!']);
    }

    public function checkoutPesanan()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/admin');
            } else if ($session->get('role') == 'user') {
                helper('number');
                $data['title'] = 'Checkout Pesanan';

                $pesananUserPaket = new PesananWithUserAndPaket();
                $data['pesananUserPaket'] = $pesananUserPaket->getPesananWithUserAndPaketInCartByIduser($session->get('id_user'));

                if ($data['pesananUserPaket'] == null) {
                    return redirect()->to('/');
                }
                return view('pages/user/checkout_pesanan', $data);
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
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
                return redirect()->to('/admin');
            } else if ($session->get('role') == 'user') {
                //data
                try {
                    $pesanan = new Pesanan();
                    $pembayaran = new Pembayaran();
                    $paket = new Paket();
                    $hasilFoto = new HasilFoto();

                    $id_paket = $this->request->getVar('id_paket');
                    $total_price = $this->request->getVar('total_price');
                    $nama = $this->request->getVar('nama');
                    $alamat = $this->request->getVar('alamat');
                    $tanggal = $this->request->getVar('tanggal');
                    $telp = $this->request->getVar('telp');
                    $catatan = $this->request->getVar('catatan');
                    $extra_waktu_kerja = $this->request->getVar('extra_waktu_kerja');
                    $extra_premium_magazine = $this->request->getVar('extra_premium_magazine');
                    $extra_background = $this->request->getVar('extra_background');
                    $extra_tempat = $this->request->getVar('extra_tempat');
                    $extra_orang = $this->request->getVar('extra_orang');
                    $extra_wisudawan = $this->request->getVar('extra_wisudawan');

                    $pesanans = $pesanan->getCheckoutPesananByIduser($session->get('id_user'));

                    if ($pesanans != null) {
                        foreach ($pesanans as $row) {
                            //mengubah data pesanan
                            $dataPesanan = [
                                'id_user' => $session->get('id_user'),
                                'id_paket' => $id_paket,
                                'nama_lengkap' => $nama,
                                'tanggal' => $tanggal,
                                'telp' => $telp,
                                'alamat' => $alamat,
                                'catatan' => $catatan,
                                'extra_waktu_kerja' => $extra_waktu_kerja,
                                'extra_premium_magazine' => $extra_premium_magazine,
                                'extra_background' => $extra_background,
                                'extra_tempat' => $extra_tempat,
                                'extra_orang' => $extra_orang,
                                'extra_wisudawan' => $extra_wisudawan,
                            ];

                            $pesanan->update($row->id_pesanan, $dataPesanan);

                            //mengirim data untuk hasil foto
                            $dataHasilFoto = [
                                'id_fotografer' => 3,
                                'id_pesanan' => $row->id_pesanan,
                            ];

                            $hasilFoto->insert($dataHasilFoto);
                        }

                        // //Set Midtrans configuration
                        $midtransConfig = new \Config\Midtrans();
                        MidtransConfig::$serverKey = $midtransConfig->serverKey;
                        MidtransConfig::$isProduction = $midtransConfig->isProduction;

                        $orderID = 'ORDER-CUST-' . $session->get('id_user') . '-' . time();

                        $dataPembayaran = [
                            'id_pesanan' => $row->id_pesanan,
                            'order_id' => $orderID,
                            'jumlah_bayar' => $total_price,
                            'status' => 'pending',
                        ];

                        $pembayaran->insert($dataPembayaran);

                        // Item details production
                        // $params = array(
                        //     'transaction_details' => array(
                        //         'order_id' => $orderID,
                        //         'gross_amount' => $total_price,
                        //     ),
                        //     "callbacks" => array(
                        //         "finish" => "http://localhost:8080/list-pesanan",
                        //     ),
                        //     'customer_details' => array(
                        //         'first_name' => $nama,
                        //         'email' => $session->get('email'),
                        //         'phone' => $telp,
                        //     )
                        // );

                        // Item details testing
                        $params = array(
                            'transaction_details' => array(
                                'order_id' => $orderID,
                                'gross_amount' => 1,
                            ),
                            "callbacks" => array(
                                "finish" => "http://localhost:8080/list-pesanan",
                            ),
                            'customer_details' => array(
                                'first_name' => $nama,
                                'email' => $session->get('email'),
                                'phone' => $telp,
                            ),
                        );

                        //Generate Snap token
                        $snapToken = Snap::getSnapToken($params);

                        //Load payment view with Snap token
                        return $this->response->setJSON([
                            'success' => true,
                            'status' => 'Sudah ada Pesanan!',
                            'snapToken' => $snapToken
                        ]);
                    } else {
                        return $this->response->setJSON(['status' => 'Belum ada pesanan!']);
                    }
                } catch (\Exception $e) {
                    return $this->response->setJSON(['error' => $e]);
                }


                // return redirect()->to('/payment');
                // return redirect()->to('/list-pesanan');
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
            }
        }
        return $this->response->setJSON(['status' => 'Belum login!']);
    }

    public function checkoutHapusKeranjang()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/admin');
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
                return redirect()->to('/fotografer');
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
                return redirect()->to('/admin');
            } else if ($session->get('role') == 'user') {
                helper('number');

                $data['title'] = 'Paket Custom';
                $paket = new Paket();
                $data['paket'] = $paket->find($id_paket);

                return view('pages/user/paket_custom', $data);
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
            }
        }
        return redirect()->to('/login');
    }

    public function paketSimpanCustom($id_paket)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/admin');
            } else if ($session->get('role') == 'user') {
                helper('number');
                try {
                    //menyimpan data paket custom
                    $paket = new Paket();
                    $data['paketDasar'] = $paket->find($id_paket);

                    $nama_paket = $this->request->getVar('nama_paket');
                    $edit_foto = $this->request->getVar('edit_foto');
                    $videografi = $this->request->getVar('videografi');
                    $harga_paket_baru = $this->request->getVar('harga_paket_baru');

                    $jumlah_videografer = 0;
                    if ($videografi != 'Tidak ada') {
                        $jumlah_videografer = 1;
                    }
                    $dataPaketCustom = [
                        'nama_paket' => $nama_paket,
                        'harga_paket' => $harga_paket_baru,
                        'fotografer' => $data['paketDasar']->fotografer,
                        'videografer' => $jumlah_videografer,
                        'asisten' => $data['paketDasar']->asisten,
                        'waktu_kerja' => $data['paketDasar']->waktu_kerja,
                        'jumlah_foto' => $data['paketDasar']->jumlah_foto,
                        'jumlah_foto_edit' => $edit_foto,
                        'cetak_foto' => $data['paketDasar']->cetak_foto,
                        'videografi' => $videografi,
                        'penyimpanan' => $data['paketDasar']->penyimpanan,
                        'note' => $data['paketDasar']->note,
                        'deskripsi_paket' => 'Paket custom sesuai dengan kebutuhan kamu dari paket ' . $data['paketDasar']->deskripsi_paket,
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

                    return $this->response->setJSON(['status' => 'Berhasil!']);
                } catch (DataException $e) {
                    return $this->response->setJSON(['error' => $e]);
                }
                // return redirect()->to('/checkout');
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
            }
        }
        return $this->response->setJSON(['status' => 'Belum login!']);
    }

    public function listPesanan()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/admin');
            } else if ($session->get('role') == 'user') {
                helper('number');
                $data['title'] = 'List Pesanan';

                $pesananUserPaketAndPembayaran = new PesananWithUserPaketAndPembayaran();
                $data['listPesanans'] = $pesananUserPaketAndPembayaran->getPesananWithUserPaketAndPembayaranByIdUser($session->get('id_user'));

                return view('pages/user/list_pesanan', $data);
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
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
                return redirect()->to('/admin');
            } else if ($session->get('role') == 'user') {
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
                    $data['qrCodeUrl'] = '';

                    // if ($data['transaksi']->payment_type == 'qris') {
                    //     $qrCode = new QrCode();
                    //     // if (isset($data['transaksi']->actions->qr_codes[0]->url)) {
                    //     //     $data['qrCodeUrl'] = $data['transaksi']->actions->qr_codes['0']->url;
                    //     // }
                    // }

                    return view('pages/user/pesanan_detail.php', $data);
                } else {
                    return redirect()->to('/');
                }
            } else if ($session->get('role') == '') {
                return redirect()->to('/fotografer');
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
                return redirect()->to('/admin');
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

    public function simpanUlasan()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/admin');
            } else if ($session->get('role') == 'user') {
                //data
                try {
                    //insert ulasan
                    helper('time');
                    $ulasan = new Ulasan();

                    $currentDate = Time::now();
                    $formattedDate = $currentDate->toLocalizedString('yyyy-MM-dd');

                    $id_paket = $this->request->getVar('id_paket');
                    $rating = $this->request->getVar('rating');
                    $deskripsi = $this->request->getVar('deskripsi');

                    $dataUlasan = [
                        'id_user' => $session->get('id_user'),
                        'id_paket' => $id_paket,
                        'tanggal' => $formattedDate,
                        'deskripsi' => $deskripsi,
                        'bintang' => $rating,
                    ];

                    $ulasan->insert($dataUlasan);

                    //rubah status di pembayaran menjadi done sudah review
                    $pembayaran = new Pembayaran();

                    $id_pembayaran = $this->request->getVar('id_pembayaran');

                    $dataPembayaran = [
                        'status' => 'done, sudah review',
                    ];

                    $pembayaran->update($id_pembayaran, $dataPembayaran);

                    return $this->response->setJSON(['status' => 'Berhasil disimpan!']);
                } catch (\Exception $e) {
                    return $this->response->setJSON(['error' => $e]);
                }
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
            }
        }
        return redirect()->to('/login');
    }

    public function profil()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/admin');
            } else if ($session->get('role') == 'user') {
                $data['title'] = 'Profil';

                $user = new User();
                $data['user'] = $user->find($session->get('id_user'));

                return view('pages/user/profil_pengguna', $data);
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
            }
        }
        $data['title'] = 'Beranda';
        return view('pages/user/index', $data);
    }

    public function profilEdit()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/admin');
            } else if ($session->get('role') == 'user') {
                $data['title'] = 'Profil';

                $user = new User();
                $data['user'] = $user->find($session->get('id_user'));

                return view('pages/user/profil_edit', $data);
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
            }
        }
        $data['title'] = 'Beranda';
        return view('pages/user/index', $data);
    }

    public function profilEditSimpan()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/admin');
            } else if ($session->get('role') == 'user') {
                if ($this->request->getFile('foto')->isValid()) {
                    $user = new User();

                    $iduser = $session->get('id_user');
                    $nama = $this->request->getVar('nama');
                    $telp = $this->request->getVar('telp');
                    $fileFoto = $this->request->getFile('foto');

                    // Generate a new file name to avoid potential conflicts
                    $newName = $fileFoto->getRandomName();

                    // Move the uploaded file to the public/uploads directory
                    $fileFoto->move(ROOTPATH . 'public/uploads', $newName);

                    // Optionally, you can store the file details in a database or do other processing here
                    $dataUser = [
                        'nama_lengkap' => $nama,
                        'no_telp' => $telp,
                        'foto_profil' => $newName,
                    ];

                    $user->update($iduser, $dataUser);
                    return redirect()->to('/profil');
                } else {
                    // Handle the file upload error
                    $error = $this->request->getFile('userfile')->getError();
                    return redirect()->back()->with('error', $error);
                }
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
            }
        }
        $data['title'] = 'Beranda';
        return view('pages/user/index', $data);
    }
}
