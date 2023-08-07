<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Paket;
use App\Models\Pesanan as ModelsPesanan;
use App\Models\PesananWithUserAndPaket;
use App\Models\User;
use CodeIgniter\API\ResponseTrait;

class AdminPesananController extends BaseController
{

    //all pesanan
    public function index()
    {

        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $data['title'] = 'Pesanan';

                $pesanan = new ModelsPesanan();
                $data['pesanans'] = $pesanan->orderBy('id_pesanan', 'ASC')->findAll();

                return view('pages/admin/pesanan/index', $data);
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
                $data['title'] = 'Tambah Pesanan';

                // get user dengan role user
                $user = new User();
                $data['users'] = $user->where('role', 'user')->orderBy('id_user', 'ASC')->findAll();

                //get paket
                $paket = new Paket();
                $data['pakets'] = $paket->orderBy('id_paket', 'ASC')->findAll();

                return view('pages/admin/pesanan/tambah', $data);
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
                $pesanan = new ModelsPesanan();
                $data = [
                    'id_user' => $this->request->getVar('id_user'),
                    'id_paket' => $this->request->getVar('id_paket'),
                    'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                    'tanggal_mulai' => $this->request->getVar('tanggal_mulai'),
                    'tanggal_selesai' => $this->request->getVar('tanggal_selesai'),
                    'telp' => $this->request->getVar('telp'),
                    'alamat' => $this->request->getVar('alamat'),
                    'catatan' => $this->request->getVar('catatan'),
                ];
                $pesanan->insert($data);

                return redirect()->to('/admin/pesanan');
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
    public function edit($id_pesanan = null)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $data['title'] = 'Tambah Pesanan';

                // get pesanan yang akan di edit
                $pesanan = new ModelsPesanan();
                $data['pesanan'] = $pesanan->find($id_pesanan);

                // get user dengan role user
                $user = new User();
                $data['users'] = $user->where('role', 'user')->orderBy('id_user', 'ASC')->findAll();

                //get paket
                $paket = new Paket();
                $data['pakets'] = $paket->orderBy('id_paket', 'ASC')->findAll();

                return view('pages/admin/pesanan/edit', $data);
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
    public function update($id_pesanan = null)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {

                $id_pesanan = $this->request->getVar('id');

                $pesanan = new ModelsPesanan();
                $data = [
                    'id_user' => $this->request->getVar('id_user'),
                    'id_paket' => $this->request->getVar('id_paket'),
                    'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                    'tanggal_mulai' => $this->request->getVar('tanggal_mulai'),
                    'tanggal_selesai' => $this->request->getVar('tanggal_selesai'),
                    'telp' => $this->request->getVar('telp'),
                    'alamat' => $this->request->getVar('alamat'),
                    'catatan' => $this->request->getVar('catatan'),
                ];
                $pesanan->update($id_pesanan, $data);

                return redirect()->to('/admin/pesanan');
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
    public function delete($id_pesanan = null)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                try {
                    $pesanan = new ModelsPesanan();
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
            } else if ($session->get('role') == 'user') {
                return redirect()->to('/');
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
            }
        }
        return redirect()->to('/login');
    }
}
