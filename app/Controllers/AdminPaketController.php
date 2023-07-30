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
                helper('number');
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
                $harga_paket = $this->request->getVar('harga_paket');
                $waktu_kerja = $this->request->getVar('waktu_kerja');
                $deskripsi_paket = $this->request->getVar('deskripsi_paket');
                $fotografer = $this->request->getVar('fotografer');
                $videografer = $this->request->getVar('videografer');
                $asisten = $this->request->getVar('asisten');
                $jumlah_foto = $this->request->getVar('jumlah_foto');
                $jumlah_edit = $this->request->getVar('jumlah_edit');
                $hasil_cetak = $this->request->getVar('hasil_cetak');
                $hasil_videografi = $this->request->getVar('hasil_videografi');


                $dataPaket = [
                    'nama_paket' => $nama_paket,
                    'harga_paket' => $harga_paket,
                    'fotografer' => $fotografer,
                    'videografer' => $videografer,
                    'asisten' => $asisten,
                    'waktu_kerja' => $waktu_kerja,
                    'jumlah_foto' => $jumlah_foto,
                    'jumlah_foto_edit' => $jumlah_edit,
                    'cetak_foto' => $hasil_cetak,
                    'videografi' => $hasil_videografi,
                    'penyimpanan' => 'All softfile via Gdrive',
                    'deskripsi_paket' => $deskripsi_paket,
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
                $harga_paket = $this->request->getVar('harga_paket');
                $waktu_kerja = $this->request->getVar('waktu_kerja');
                $deskripsi_paket = $this->request->getVar('deskripsi_paket');
                $fotografer = $this->request->getVar('fotografer');
                $videografer = $this->request->getVar('videografer');
                $asisten = $this->request->getVar('asisten');
                $jumlah_foto = $this->request->getVar('jumlah_foto');
                $jumlah_edit = $this->request->getVar('jumlah_edit');
                $hasil_cetak = $this->request->getVar('hasil_cetak');
                $hasil_videografi = $this->request->getVar('hasil_videografi');


                $dataPaket = [
                    'nama_paket' => $nama_paket,
                    'harga_paket' => $harga_paket,
                    'fotografer' => $fotografer,
                    'videografer' => $videografer,
                    'asisten' => $asisten,
                    'waktu_kerja' => $waktu_kerja,
                    'jumlah_foto' => $jumlah_foto,
                    'jumlah_foto_edit' => $jumlah_edit,
                    'cetak_foto' => $hasil_cetak,
                    'videografi' => $hasil_videografi,
                    'penyimpanan' => 'All softfile via Gdrive',
                    'deskripsi_paket' => $deskripsi_paket,
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
    public function delete()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                try {
                    $paket = new ModelsPaket();
                    $id_paket = $this->request->getVar('id_paket');

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
