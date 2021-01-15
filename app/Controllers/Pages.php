<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Pages extends BaseController
{
    protected $barangModel;
    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }

    public function home()
    {
        $data = [
            'title' => 'Home | JehaShop'
        ];
        return view('pages/home', $data);
    }


    public function about()
    {
        $data = [
            'title' => 'About | JehaShop'
        ];
        return view('pages/about', $data);
    }


    public function contact()
    {
        $data = [
            'title' => 'Contact | JehaShop'
        ];
        return view('pages/contact', $data);
    }


    //halaman pilihan barang
    public function barang()
    {
        $data = [
            'title' => 'Daftar Barang | JehaShop',
            'barang' => $this->barangModel->getBarang()
        ];

        return view('pages/barang', $data);
    }

    public function detail($slug)
    {

        $data = [
            'title' => 'Detail Barang | JehaShop',
            'barang' => $this->barangModel->getBarang($slug)
        ];
        return view('pages/detail', $data);
    }

    public function keranjang()
    {
        $data = [
            'title' => 'Keranjang Saya | JehaShop'
        ];
        return view('pages/keranjang', $data);
    }


    public function checkout()
    {
        $data = [
            'title' => 'Checkout | JehaShop'
        ];
        return view('pages/checkout', $data);
    }

    public function sukses()
    {
        $data = [
            'title' => 'CheckOut | JehaShop'
        ];
        return view('pages/sukses', $data);
    }

    public function payment()
    {
        $data = [
            'title' => 'CheckOut | JehaShop'
        ];
        return view('pages/payment', $data);
    }
}
