<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User as ModelsUser;
use CodeIgniter\API\ResponseTrait;

class AdminUserController extends BaseController
{
    //all user
    public function index()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $data['title'] = 'User';
                $user = new ModelsUser();
                $data['users'] = $user->orderBy('id_user', 'ASC')->findAll();

                return view('pages/admin/user/index', $data);
            } else if ($session->get('role') == 'user') {
                return redirect()->to('/');
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
            }
        }
        $data['title'] = 'Beranda';
        return redirect()->to('/');
    }

    //create page
    public function new()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $data['title'] = 'Tambah User';
                return view('pages/admin/user/tambah', $data);
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
        // return $this->respondCreated($response);
        return 'create page';
    }

    // single user
    public function show($id_user)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $data['title'] = 'Detail User';
                $user = new ModelsUser();
                $data['users'] = $user->find($id_user);

                return view('pages/admin/user/form', $data);
            } else if ($session->get('role') == 'user') {
                return redirect()->to('/');
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
            }
        }
        $data['title'] = 'Beranda';
        return redirect()->to('/');
    }

    public function edit($id_user = null)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $data['typeForm'] = 'edit';
                $data['title'] = 'Edit User';

                $user = new ModelsUser();
                $data['user'] = $user->find($id_user);

                return view('pages/admin/user/edit', $data);
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
    public function update($id_user = null)
    {

        return 'edit page';
    }

    // delete
    public function delete($id_user = null)
    {
        return 'edit page';
    }
}
