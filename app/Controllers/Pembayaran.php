<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pembayaran as ModelsPembayaran;
use App\Models\PembayaranWithPesanan;
use CodeIgniter\API\ResponseTrait;

class Pembayaran extends BaseController
{
    use ResponseTrait;
    // protected $modelName = 'App\Models\PostModel';
    // protected $format = 'json';

    //all pembayaran
    public function index()
    {
        // $pembayaran = new ModelsPembayaran();
        // $data['pembayaran'] = $pembayaran->orderBy('id_pembayaran', 'DESC')->findAll();
        // return $this->respond($data);

        $pembayaran = new PembayaranWithPesanan();
        $data['pembayaran'] = $pembayaran->getPembayaranWithPesanan();
        return $this->respond($data);
    }

    // create
    public function create()
    {
        $pembayaran = new ModelsPembayaran();
        $data = [
            'id_pesan' => $this->request->getVar('id_pesan'),
            'type_pembayaran'  => $this->request->getVar('type_pembayaran'),
            'jumlah_bayar' => $this->request->getVar('jumlah_bayar'),
            'status' => $this->request->getVar('status')
        ];
        $pembayaran->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data fotografer berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }

    // single pembayaran
    public function show($id_pembayaran = null)
    {
        // $pembayaran = new ModelsPembayaran();
        // $data = $pembayaran->where('id_pembayaran', $id_pembayaran)->first();
        // if ($data) {
        //     return $this->respond($data);
        // } else {
        //     return $this->failNotFound('Data tidak ditemukan.');
        // }

        $pembayaran = new PembayaranWithPesanan();
        $data['pembayaran'] = $pembayaran->getPembayaranWithPesananById($id_pembayaran);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }

    // update
    public function update($id_pembayaran = null)
    {
        $pembayaran = new ModelsPembayaran();
        $data = $this->request->getRawInput();
        $data['id_pembayaran'] = $id_pembayaran;

        if (!$pembayaran->save($data)) {
            return $this->fail($pembayaran->errors());
        }
        return $this->respond($data, 200, 'Pembayaran terupdate.');
    }

    // delete
    public function delete($id_pembayaran = null)
    {
        $pembayaran = new ModelsPembayaran();
        $data = $pembayaran->where('id_pembayaran', $id_pembayaran)->delete($id_pembayaran);
        if ($data) {
            $pembayaran->delete($id_pembayaran);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data pembayaran berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}
