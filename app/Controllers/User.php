<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User as ModelsUser;
use CodeIgniter\API\ResponseTrait;

class User extends BaseController
{
    use ResponseTrait;
    // protected $modelName = 'App\Models\PostModel';
    // protected $format = 'json';

    //all user
    public function index()
    {
        $user = new ModelsUser();
        $data['user'] = $user->orderBy('id_user', 'DESC')->findAll();
        return $this->respond($data);
    }

    // create
    public function create()
    {
        $user = new ModelsUser();
        $data = [
            'email' => $this->request->getVar('email'),
            'nama_lengkap'  => $this->request->getVar('nama_lengkap'),
            'no_telp' => $this->request->getVar('no_telp'),
            'password' => $this->request->getVar('password'),
            'role' => $this->request->getVar('role')
        ];
        $user->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data user berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }

    // single user
    public function show($id_user = null)
    {
        $user = new ModelsUser();
        $data = $user->where('id_user', $id_user)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }

    // update
    public function update($id_user = null)
    {
        $user = new ModelsUser();
        $data = $this->request->getRawInput();
        $data['id_user'] = $id_user;

        if (!$user->save($data)) {
            return $this->fail($user->errors());
        }
        return $this->respond($data, 200, 'User terupdate.');
    }

    // delete
    public function delete($id_user = null)
    {
        $user = new ModelsUser();
        $data = $user->where('id_user', $id_user)->delete($id_user);
        if ($data) {
            $user->delete($id_user);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data user berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}
