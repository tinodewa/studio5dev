<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class Register extends BaseController
{
    public function index()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/admin');
            } else if ($session->get('role') == 'user') {
                return redirect()->to('/user');
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
            }
        }

        $data['title'] = 'Register';
        return view('pages/register', $data);
    }

    public function process()
    {
        //validate data in form
        if (!$this->validate([
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Gunakan email yang valid',
                ]
            ],
            'nama_lengkap' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],
            'no_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 6 Karakter',
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $session = session();
        $user = new User();

        $email = $this->request->getVar('email');
        $nama_lengkap = $this->request->getVar('nama_lengkap');
        $no_telp = $this->request->getVar('no_telp');
        $password = $this->request->getVar('password');
        $role = 'user';

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            'email' => $email,
            'nama_lengkap' => $nama_lengkap,
            'no_telp' => $no_telp,
            'password' => $hashedPassword,
            'role' => $role,
        ];

        $user->insert($data);

        $session->setFlashdata('success', 'Registrasi berhasil.');

        return redirect()->to('/login');
    }
}
