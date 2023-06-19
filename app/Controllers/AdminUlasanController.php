<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Paket;
use App\Models\Ulasan as ModelsUlasan;
use App\Models\UlasanWithUserAndPaket;
use App\Models\User;
use CodeIgniter\API\ResponseTrait;

class AdminUlasanController extends BaseController
{

    //all ulasan
    public function index()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $data['title'] = 'Ulasan';
                $ulasan = new ModelsUlasan();
                $data['ulasans'] = $ulasan->orderBy('id_ulasan', 'ASC')->findAll();

                return view('pages/admin/ulasan/index', $data);
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
                $data['title'] = 'Tambah Ulasan';

                // get user dengan role user
                $user = new User();
                $data['users'] = $user->where('role', 'user')->orderBy('id_user', 'ASC')->findAll();

                //get paket
                $paket = new Paket();
                $data['pakets'] = $paket->orderBy('id_paket', 'ASC')->findAll();

                return view('pages/admin/ulasan/tambah', $data);
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
                $ulasan = new ModelsUlasan();

                $data = [
                    'id_user' => $this->request->getVar('id_user'),
                    'id_paket'  => $this->request->getVar('id_paket'),
                    'tanggal' => $this->request->getVar('tanggal'),
                    'deskripsi' => $this->request->getVar('deskripsi'),
                    'bintang' => $this->request->getVar('bintang')
                ];
                $ulasan->insert($data);
                return redirect()->to('/admin/ulasan');
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
    public function edit($id_ulasan = null)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $data['title'] = 'Edit Ulasan';

                //get ulasan yang akan di edit
                $ulasan = new ModelsUlasan();
                $data['ulasan'] = $ulasan->find($id_ulasan);

                // get user dengan role user
                $user = new User();
                $data['users'] = $user->where('role', 'user')->orderBy('id_user', 'ASC')->findAll();

                //get paket
                $paket = new Paket();
                $data['pakets'] = $paket->orderBy('id_paket', 'ASC')->findAll();

                return view('pages/admin/ulasan/edit', $data);
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
    public function update($id_ulasan = null)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $ulasan = new ModelsUlasan();

                $id_ulasan = $this->request->getVar('id');

                $data = [
                    'id_user' => $this->request->getVar('id_user'),
                    'id_paket'  => $this->request->getVar('id_paket'),
                    'tanggal' => $this->request->getVar('tanggal'),
                    'deskripsi' => $this->request->getVar('deskripsi'),
                    'bintang' => $this->request->getVar('bintang')
                ];

                $ulasan->update($id_ulasan, $data);
                return redirect()->to('/admin/ulasan');
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
    public function delete($id_ulasan = null)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                try {
                    $ulasan = new ModelsUlasan();
                    $id_ulasan = $this->request->getVar('id_ulasan');

                    $deleted = $ulasan->where('id_ulasan', $id_ulasan)->delete();

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
