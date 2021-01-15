<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primarykey = 'id';
    
    protected $allowedFields = ['email', 'username', 'kata_sandi', 'no_telp', 
    'nama', 'tanggal_lahir', 'alamat', 'kode_pos', 'level'];

    function get_data_login($username, $tabel) 
    {
        $builder = $this->db->table($tabel);
        $builder->where('username', $username);
        $log = $builder->get()->getRow();
        return $log;
    }

}