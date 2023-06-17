<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HasilFoto as ModelsHasilFoto;
use App\Models\HasilFotoWithUserAndPesanan;
use CodeIgniter\API\ResponseTrait;

class AdminHasilFotoController extends BaseController
{
    use ResponseTrait;
    // protected $modelName = 'App\Models\PostModel';
    // protected $format = 'json';

    //all fotografer
    public function index()
    {
        // $hasil_foto = new ModelsHasilFoto();
        // $data['hasil_foto'] = $hasil_foto->orderBy('id_hasil_foto', 'DESC')->findAll();
        // return $this->respond($data);

        $hasil_foto = new HasilFotoWithUserAndPesanan();
        $data['hasil_foto'] = $hasil_foto->getHasilFotoWithUserAndPesanan();
        return $this->respond($data);
    }

    // create
    public function create()
    {
        $hasil_foto = new ModelsHasilFoto();
        $data = [
            'id_fotografer' => $this->request->getVar('id_fotografer'),
            'id_pesan'  => $this->request->getVar('id_pesan'),
            'hasil_foto' => $this->request->getVar('hasil_foto')
        ];
        $hasil_foto->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data fotografer berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }

    // single hasil foto
    public function show($id_hasil_foto = null)
    {
        // $hasil_foto = new ModelsHasilFoto();
        // $data = $hasil_foto->where('id_hasil_foto', $id_hasil_foto)->first();
        // if ($data) {
        //     return $this->respond($data);
        // } else {
        //     return $this->failNotFound('Data tidak ditemukan.');
        // }
        $hasil_foto = new HasilFotoWithUserAndPesanan();
        $data['hasil_foto'] = $hasil_foto->getHasilFotoWithUserAndPesananById($id_hasil_foto);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }

    // update
    public function update($id_hasil_foto = null)
    {
        $hasil_foto = new ModelsHasilFoto();
        $data = $this->request->getRawInput();
        $data['id_hasil_foto'] = $id_hasil_foto;

        if (!$hasil_foto->save($data)) {
            return $this->fail($hasil_foto->errors());
        }
        return $this->respond($data, 200, 'Hasil foto terupdate.');
    }

    // delete
    public function delete($id_hasil_foto = null)
    {
        $hasil_foto = new ModelsHasilFoto();
        $data = $hasil_foto->where('id_hasil_foto', $id_hasil_foto)->delete($id_hasil_foto);
        if ($data) {
            $hasil_foto->delete($id_hasil_foto);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data hasil foto berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}
