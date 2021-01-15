<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Auth extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Login | JehaShop'
        ];
        return view('user/login', $data);
    }

    public function registrasi()
    {
        session();
        $data = [
            'title' => 'Registrasi | JehaShop',
            'validation' => \Config\Services::validation(),
        ];
        return view('user/registrasi', $data);
    }

}
