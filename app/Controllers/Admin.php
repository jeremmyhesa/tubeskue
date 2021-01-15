<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Admin extends BaseController
{
    protected $barangModel;
    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }

    //menampilkan halaman editbarang, sekaligus ===
    //=== menghubungkan dengan tabel melalui model
    public function editbarang()
    {
        $data = [
            'title' => 'Menu Utama | JehaShop',
            'barang' => $this->barangModel->getBarang()
        ];

        return view('admin/editbarang', $data);
    }

    
    //edit keranjang user oleh admin
    public function responadmin()
    {
        $data = [
            'title' => 'Respon Admin | JehaShop'
        ];
        return view('admin/responadmin', $data);
    }


    //mengarahkan ke halaman tambahbarang, dan juga menyimpan validasi data
    public function tambahbarang()
    {

        $data = [
            'title' => 'Tambah Barang | JehaShop',
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/tambahbarang', $data);
    }


    //method untk menyimpan data yang ditambahkan
    public function save()
    {
        //validasi
        if(!$this->validate([
            'nama' => 'required|is_unique[barang.nama]',
            'jenis' => 'required',
            'harga' => 'required',
            'toko' => 'required',
            'stok' => 'required',
            'detail' => 'required',
            'gambar' => [
                'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
            ],
        ])) {
            // $pesanValid = \Config\Services::validation();
            // return redirect()->to('/admin/tambahbarang')->withInput()->with('validation', $pesanValid);

            //kalo udah ditambahin enctype ke form, sebaiknya menggunakan redirect validation di bawah ini
            return redirect()->to('/admin/tambahbarang')->withInput();
        }

        //ambil file gambar
        $fileGambar = $this->request->getFile('gambar');
        //jika tidak ada gambar, pake gambar default
        if ($fileGambar->getError() == 4) {
            $namaGambar = 'default.jpg';
        } else {
            //generate nama random file gambar
            $namaGambar = $fileGambar->getRandomName();
            //pindahin gambar ke img
            $fileGambar->move('img', $namaGambar);
        }

        //penambahan data ke tabel
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->barangModel->save([
            'slug' => $slug,
            'nama' => $this->request->getVar('nama'),
            'jenis' => $this->request->getVar('jenis'),
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok'),
            'detail' => $this->request->getVar('detail'),
            'toko' => $this->request->getVar('toko'),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Berhasil menambahkan barang');

        return redirect()->to('/admin/editbarang');
    }

    //memanggil tabel barang dan menampilkan halaman update barang
    public function edit($slug)
    {
        $data = [
            'title' => 'Form Ubah Data Barang | JehaShop',
            'validation' => \Config\Services::validation(),
            'barang' => $this->barangModel->getBarang($slug)
        ];
        
        return view('admin/updatebarang', $data);
    }
    
    //method untuk menyimpan hasil update barang, isiannya hampir sama dengan method save
    public function update($id) 
    {
        //pendefinisian biar nama yang di edit gak sama kyk nama yg udah ada di tabel ====
        // ==== dan biar kalo gk ganti nama, namanya tetep yg lamaa
        $namaLama = $this->barangModel->getBarang($this->request->getVar('slug'));
        if ($namaLama['nama'] == $this->request->getVar('nama')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[barang.nama]';
        }
        
        //validasi data
        if(!$this->validate([
            'nama' => $rule_nama,
            'harga' => 'required',
            'jenis' => 'required',
            'toko' => 'required',
            'stok' => 'required',
            'detail' => 'required',
            'gambar' => [
                'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
            ],
        ])) {
            // $pesanValid = \Config\Services::validation();
            // return redirect()->to('/admin/tambahbarang')->withInput()->with('validation', $pesanValid);

            //kalo udah ditambahin enctype ke form, sebaiknya menggunakan redirect validation di bawah ini
            return redirect()->to('/admin/edit/' .$this->request->getVar('slug'))->withInput();
        }
        
        //ambil file gambar
        $fileGambar = $this->request->getFile('gambar');
        //jika tidak ada gambar
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            //generate nama random file gambar
            $namaGambar = $fileGambar->getRandomName();
            //pindahin gambar ke img
            $fileGambar->move('img', $namaGambar);
            //hapus file lama
            unlink('img/' . $this->request->getVar('gambarLama'));

        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->barangModel->save([
            'id' => $id,
            'slug' => $slug,
            'nama' => $this->request->getVar('nama'),
            'jenis' => $this->request->getVar('jenis'),
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok'),
            'detail' => $this->request->getVar('detail'),
            'toko' => $this->request->getVar('toko'),
            'gambar' => $namaGambar
            
        ]);

        session()->setFlashdata('pesan', 'Berhasil diubah');

        return redirect()->to('/admin/editbarang');
    }

    public function delete($id) 
    {
        //cari gambar berdasarkan pada id
        $barang = $this->barangModel->find($id);

        if ($barang['gambar'] != 'default.jpg') {
            //hapus gambarnya
            unlink('img/' . $barang['gambar']);
        }

        $this->barangModel->delete($id);
        session()->setFlashdata('pesan', 'Berhasil Dihapus');
        return redirect()->to('/admin/editbarang');
    }
}
