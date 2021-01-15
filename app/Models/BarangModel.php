<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $useTimestamps = true;
    protected $allowedFields = ['gambar', 'slug', 'toko', 'nama', 'harga', 'stok', 'detail','jenis'];

    public function getBarang($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

    public function getKuebasah()
    {
        $kuebasah = "Basah";
        return $this->where('jenis', $kuebasah)->findAll();
    }

}
