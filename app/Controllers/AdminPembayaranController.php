<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pembayaran as ModelsPembayaran;
use App\Models\PembayaranWithPesanan;
use App\Models\Pesanan;
use CodeIgniter\API\ResponseTrait;

class AdminPembayaranController extends BaseController
{
    //all pembayaran
    public function index()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $data['title'] = 'Pembayaran';

                $pembayaran = new ModelsPembayaran();
                $data['pembayarans'] = $pembayaran->orderBy('id_pembayaran', 'ASC')->findAll();

                return view('pages/admin/pembayaran/index', $data);
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
                $data['title'] = 'Tambah Pembayaran';

                // get pembayaran
                $pesanan = new Pesanan();
                $data['pesanans'] = $pesanan->orderBy('id_pesanan', 'ASC')->findAll();

                return view('pages/admin/pembayaran/tambah', $data);
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
                $pembayaran = new ModelsPembayaran();

                $data = [
                    'id_pesanan' => $this->request->getVar('id_pesanan'),
                    'type_pembayaran'  => $this->request->getVar('type_pembayaran'),
                    'jumlah_bayar' => $this->request->getVar('jumlah_bayar'),
                    'status' => $this->request->getVar('status'),
                    'bukti' => $this->request->getVar('bukti')
                ];
                $pembayaran->insert($data);

                return redirect()->to('/admin/pembayaran');
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
    public function edit($id_pembayaran = null)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $data['title'] = 'Edit Pembayaran';

                //get pembayaran yang akan di edit
                $pembayaran = new Modelspembayaran();
                $data['pembayaran'] = $pembayaran->find($id_pembayaran);

                // get pesanan
                $pesanan = new Pesanan();
                $data['pesanans'] = $pesanan->orderBy('id_pesanan', 'ASC')->findAll();


                return view('pages/admin/pembayaran/edit', $data);
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
    public function update($id_pembayaran = null)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $pembayaran = new ModelsPembayaran();

                $id_pembayaran = $this->request->getVar('id');

                $data = [
                    'id_pesanan' => $this->request->getVar('id_pesanan'),
                    'type_pembayaran'  => $this->request->getVar('type_pembayaran'),
                    'jumlah_bayar' => $this->request->getVar('jumlah_bayar'),
                    'status' => $this->request->getVar('status'),
                    'bukti' => $this->request->getVar('bukti')
                ];

                $pembayaran->update($id_pembayaran, $data);

                return redirect()->to('/admin/pembayaran');
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
    public function delete($id_pembayaran = null)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                try {
                    $pembayaran = new ModelsPembayaran();
                    $id_pembayaran = $this->request->getVar('$id_pembayaran');

                    $deleted = $pembayaran->where('id_pembayaran', $id_pembayaran)->delete();

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
