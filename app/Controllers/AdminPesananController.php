<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pesanan as ModelsPesanan;
use App\Models\PesananWithUserAndPaket;
use CodeIgniter\API\ResponseTrait;

class AdminPesananController extends BaseController
{
    use ResponseTrait;
    // protected $modelName = 'App\Models\PostModel';
    // protected $format = 'json';

    //all pesanan
    public function index()
    {
        // $pesanan = new ModelsPesanan();
        // $data['fotografer'] = $pesanan->orderBy('id_pesan', 'DESC')->findAll();
        // return $this->respond($data);

        $pesanan = new PesananWithUserAndPaket();
        $data['pesanan'] = $pesanan->getPesananWithUserAndPaket();
        return $this->respond($data);
    }

    // create
    public function create()
    {
        $db = \Config\Database::connect();
        $pesanan = new ModelsPesanan();
        $data = [
            'id_user' => $this->request->getVar('id_user'),
            'id_paket' => $this->request->getVar('id_paket'),
            'tanggal_foto' => $this->request->getVar('tanggal_foto'),
            'jam' => $this->request->getVar('jam'),
            'alamat' => $this->request->getVar('alamat'),
            'jumlah' => $this->request->getVar('jumlah'),
            'harga_total' => $this->request->getVar('harga_total'),
            'note' => $this->request->getVar('note'),
        ];
        $pesanan->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data pesanan berhasil ditambahkan.'
            ]
        ];

        $newID = $pesanan->getInsertID();

        return $this->respondCreated($response);
    }

    // single pesanan
    public function show($id_pesan = null)
    {
        $pesanan = new PesananWithUserAndPaket();
        $data['pesanan'] = $pesanan->getPesananWithUserAndPaketById($id_pesan);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }

    // update
    public function update($id_pesan = null)
    {
        $pesanan = new ModelsPesanan();
        $data = $this->request->getRawInput();
        $data['id_pesan'] = $id_pesan;

        if (!$pesanan->save($data)) {
            return $this->fail($pesanan->errors());
        }
        return $this->respond($data, 200, 'Pesanan terupdate.');
    }

    // delete
    public function delete($id_pesan = null)
    {
        $pesanan = new ModelsPesanan();
        $data = $pesanan->where('id_pesan', $id_pesan)->delete($id_pesan);
        if ($data) {
            $pesanan->delete($id_pesan);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data pesanan berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}
