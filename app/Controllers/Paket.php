<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Paket as ModelsPaket;
use CodeIgniter\API\ResponseTrait;

class Paket extends BaseController
{
    use ResponseTrait;
    // protected $modelName = 'App\Models\PostModel';
    // protected $format = 'json';

    //all paket
    public function index()
    {
        $paket = new ModelsPaket();
        $data['paket'] = $paket->orderBy('id_paket', 'DESC')->findAll();
        return $this->respond($data);
    }

    // create
    public function create()
    {
        $paket = new ModelsPaket();
        $data = [
            'nama_paket' => $this->request->getVar('nama_paket'),
            'deskripsi'  => $this->request->getVar('deskripsi'),
            'harga' => $this->request->getVar('harga'),
            'foto' => $this->request->getVar('foto'),
        ];
        $paket->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data paket berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }

    // single paket
    public function show($id_paket = null)
    {
        $paket = new ModelsPaket();
        $data = $paket->where('id_paket', $id_paket)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }

    // update
    public function update($id_paket = null)
    {
        $paket = new ModelsPaket();
        $data = $this->request->getRawInput();
        $data['id_paket'] = $id_paket;

        if (!$paket->save($data)) {
            return $this->fail($paket->errors());
        }
        return $this->respond($data, 200, 'Paket terupdate.');
    }

    // delete
    public function delete($id_paket = null)
    {
        $paket = new ModelsPaket();
        $data = $paket->where('id_paket', $id_paket)->delete($id_paket);
        if ($data) {
            $paket->delete($id_paket);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data paket berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}
