<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use PhpParser\Node\Stmt\Echo_;

class Login extends BaseController
{
    public function index()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/admin');
            } else if ($session->get('role') == 'user') {
                return redirect()->to('/dashboard');
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/fotografer');
            }
        }
        $data['title'] = 'Login';
        return view('pages/login', $data);
    }

    public function process()
    {
        $session = session();
        $users = new User();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $users->where('email', $email)->first();

        if (!$user) {
            $session->setFlashdata('error', 'Akun tidak ditemukan.');
            return redirect()->to('/login');
        }

        $passwordVerified = password_verify($password, $user->password);

        if (!$passwordVerified) {
            $session->setFlashdata('error', 'Password tidak sesuai.');
            return redirect()->to('/login');
        }

        $session->set([
            'id_user' => $user->id_user,
            'email' => $user->email,
            'nama_lengkap' => $user->nama_lengkap,
            'no_telp' => $user->no_telp,
            'role' => $user->role,
            'logged_in' => TRUE
        ]);

        if ($user->role == 'admin') {
            return redirect()->to('/admin');
        } else if ($user->position == 'user') {
            return redirect()->to('/dashboard');
        } else if ($user->position == 'fotografer') {
            return redirect()->to('/fotografer');
        } else {
            session()->setFlashdata('error', 'terjadi kesalahan, mohon coba lagi nanti');
            return redirect()->to('/login');
        }
    }

    function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
