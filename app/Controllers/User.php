<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{

    protected $userModel;
	public function __construct() {
		$this->userModel = new UserModel();
	}

    public function save()
    {
        $val = $this->validate(
            [
                'inputEmail' => 'required',
                'Username' => 'required|is_unique[user.username]',
                'inputPassword' => 'required',
                'rePassword' => 'required|matches[inputPassword]',
                'alamat' => 'required',
                'level' => 'required',
            ],
        );

        if (!$val) {
            $pesanValid = \Config\Services::validation();
            return redirect()->to('/auth/registrasi')->withInput()->with('validation', $pesanValid);
        }

        $this->userModel->save([
			'email' => $this->request->getPost('inputEmail'),
            'username' => $this->request->getPost('Username'),
            'kata_sandi' => password_hash($this->request->getPost('inputPassword'), PASSWORD_DEFAULT),
            'nama' => $this->request->getPost('Nama'),
            'no_telp' => $this->request->getPost('telpon'),
            'tanggal_lahir' => $this->request->getPost('tanggal'),
            'alamat' => $this->request->getPost('alamat'),
            'kode_pos' => $this->request->getPost('kodepos'),
            'level' => $this->request->getPost('level')
        ]);
        
        session()->setFlashdata('pesan', 'Registrasi berhasil');
        return redirect()->to('/');
    }

    public function login() 
    {
        $table = 'user';
        $username = $this->request->getPost('username');
        $kata_sandi = $this->request->getPost('password');
        $row = $this->userModel->get_data_login($username, $table);

        if ($row == NULL) {
            session()->setFlashdata('pesan', 'username anda salah');
            return redirect()->to('/');
        }

        if (password_verify($kata_sandi, $row->kata_sandi)) {
            $data = array(
                'log' => TRUE,
                'nama' => $row->nama,
                'username' => $row->username,
                'level' => $row->level,
            );
            session()->set($data);
            session()->setFlashdata('pesan', 'Login berhasil');
            return redirect()->to('/pages/home');
        }
            session()->setFlashdata('pesan', 'password salah');
            return redirect()->to('/');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        session()->setFlashdata('pesan', 'Berhasil Logout');
        return redirect()->to('/');
    }
}
