<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = session();

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/home/admin');
            } else if ($session->get('role') == 'user') {
                $data['title'] = 'Dashboard';
                return redirect()->to('/');
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/home/fotografer');
            }
        }
        $data['title'] = 'Beranda';
        return redirect()->to('/');
    }

    public function admin()
    {
        $session = session();
        $data['title'] = 'Beranda';

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return view('pages/admin/index');
            } else if ($session->get('role') == 'user') {
                return redirect()->to('/');
            } else if ($session->get('role') == 'fotografer') {
                return redirect()->to('/home/fotografer');
            }
        }
        return redirect()->to('/');
    }

    public function fotografer()
    {
        $session = session();
        $data['title'] = 'Beranda';

        if ($session->has('logged_in')) {
            //cek position dari session
            if ($session->get('role') == 'admin') {
                return redirect()->to('/admin');
            } else if ($session->get('role') == 'user') {
                return redirect()->to('/');
            } else if ($session->get('role') == 'fotografer') {
                return view('pages/fotografer/index');
            }
        }
        return redirect()->to('/');
    }
}
