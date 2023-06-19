<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HasilFoto as ModelsHasilFoto;
use App\Models\Pesanan;
use App\Models\User;

class AdminHasilFotoController extends BaseController
{
    //all fotografer
    public function index()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $data['title'] = 'Hasil Foto';
                $hasil_foto = new ModelsHasilFoto();
                $data['hasilFotos'] = $hasil_foto->orderBy('id_hasil_foto', 'ASC')->findAll();

                return view('pages/admin/hasil_foto/index', $data);
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
                $data['title'] = 'Tambah Hasil Foto';

                //get user dengan role fotografer
                $userFotografer = new User();
                $data['fotografers'] = $userFotografer->where('role', 'fotografer')->orderBy('id_user', 'ASC')->findAll();

                //get pesanan
                $pesanan = new Pesanan();
                $data['pesanans'] = $pesanan->orderBy('id_pesanan', 'ASC')->findAll();

                return view('pages/admin/hasil_foto/tambah', $data);
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
                $hasil_foto = new ModelsHasilFoto();
                $data = [
                    'id_fotografer' => $this->request->getVar('id_fotografer'),
                    'id_pesanan'  => $this->request->getVar('id_pesanan'),
                    'hasil_foto' => $this->request->getVar('hasil_foto')
                ];
                $hasil_foto->insert($data);
                return redirect()->to('/admin/hasil-foto');
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
    public function edit($id_hasil_foto = null)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $data['title'] = 'Edit Hasil Foto';

                //get hasil foto yang akan di edit
                $hasil_foto = new ModelsHasilFoto();
                $data['hasilFoto'] = $hasil_foto->find($id_hasil_foto);

                //get user dengan role fotografer
                $userFotografer = new User();
                $data['fotografers'] = $userFotografer->where('role', 'fotografer')->orderBy('id_user', 'ASC')->findAll();

                //get pesanan
                $pesanan = new Pesanan();
                $data['pesanans'] = $pesanan->orderBy('id_pesanan', 'ASC')->findAll();

                return view('pages/admin/hasil_foto/edit', $data);
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
    public function update($id_hasil_foto = null)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $hasil_foto = new ModelsHasilFoto();

                $id_hasil_foto = $this->request->getVar('id');

                $data = [
                    'id_fotografer' => $this->request->getVar('id_fotografer'),
                    'id_pesanan'  => $this->request->getVar('id_pesanan'),
                    'hasil_foto' => $this->request->getVar('hasil_foto')
                ];

                $hasil_foto->update($id_hasil_foto, $data);
                return redirect()->to('/admin/hasil-foto');
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
    public function delete($id_hasil_foto = null)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                try {
                    $hasil_foto = new ModelsHasilFoto();
                    $id_hasil_foto = $this->request->getVar('id_hasil_foto');

                    $deleted = $hasil_foto->where('id_hasil_foto', $id_hasil_foto)->delete();

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
