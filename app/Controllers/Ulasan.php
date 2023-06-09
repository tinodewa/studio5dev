<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Ulasan as ModelsUlasan;
use App\Models\UlasanWithUserAndPaket;
use CodeIgniter\API\ResponseTrait;

class Ulasan extends BaseController
{
    use ResponseTrait;
    // protected $modelName = 'App\Models\PostModel';
    // protected $format = 'json';

    //all ulasan
    public function index()
    {
        // $ulasan = new ModelsUlasan();
        // $data['ulasan'] = $ulasan->orderBy('id_ulasan', 'DESC')->findAll();
        // return $this->respond($data);

        $ulasan = new UlasanWithUserAndPaket();
        $data['ulasan'] = $ulasan->getUlasanWithUserAndPaket();
        return $this->respond($data);
    }

    // create
    public function create()
    {
        $ulasan = new ModelsUlasan();
        $data = [
            'id_user' => $this->request->getVar('id_user'),
            'id_paket'  => $this->request->getVar('id_paket'),
            'tanggal' => $this->request->getVar('tanggal'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'bintang' => $this->request->getVar('bintang')
        ];
        $ulasan->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data ulasan berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }

    // single ulasan
    public function show($id_ulasan = null)
    {
        // $ulasan = new ModelsUlasan();
        // $data = $ulasan->where('id_ulasan', $id_ulasan)->first();
        // if ($data) {
        //     return $this->respond($data);
        // } else {
        //     return $this->failNotFound('Data tidak ditemukan.');
        // }

        $ulasan = new UlasanWithUserAndPaket();
        $data['ulasan'] = $ulasan->getUlasanWithUserAndPaketById($id_ulasan);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }

    // update
    public function update($id_ulasan = null)
    {
        $ulasan = new ModelsUlasan();
        $data = $this->request->getRawInput();
        $data['id_ulasan'] = $id_ulasan;

        if (!$ulasan->save($data)) {
            return $this->fail($ulasan->errors());
        }
        return $this->respond($data, 200, 'Ulasan terupdate.');
    }

    // delete
    public function delete($id_ulasan = null)
    {
        $ulasan = new ModelsUlasan();
        $data = $ulasan->where('id_ulasan', $id_ulasan)->delete($id_ulasan);
        if ($data) {
            $ulasan->delete($id_ulasan);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data ulasan berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}
