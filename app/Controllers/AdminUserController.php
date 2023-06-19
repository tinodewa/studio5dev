<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User as ModelsUser;

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

    //new
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
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $user = new ModelsUser();

                $password = $this->request->getVar('password');
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                $data = [
                    'nama_lengkap'  => $this->request->getVar('nama-lengkap'),
                    'email' => $this->request->getVar('email'),
                    'no_telp' => $this->request->getVar('telpon'),
                    'role' => $this->request->getVar('role'),
                    'password' => $hashedPassword,
                ];
                $user->insert($data);
                return redirect()->to('/admin/user');
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
    public function edit($id_user = null)
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
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
    public function update()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                $user = new ModelsUser();

                $id_user = $this->request->getVar('id');

                $password = $this->request->getVar('password');
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                $data = [
                    'nama_lengkap'  => $this->request->getVar('nama-lengkap'),
                    'email' => $this->request->getVar('email'),
                    'no_telp' => $this->request->getVar('telpon'),
                    'role' => $this->request->getVar('role'),
                    'password' => $hashedPassword,
                ];
                $user->update($id_user, $data);
                return redirect()->to('/admin/user');
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
                    $user = new ModelsUser();
                    $id_user = $this->request->getVar('id_user');

                    $deleted = $user->where('id_user', $id_user)->delete();

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
