<?php

use App\Models\UserModel;

function allow($level) {
    $session = \Config\Services::session();
    $user = $session->get('username');
    $tabel = 'user';
    $userModel = new UserModel;
    $row = $userModel->get_data_login($user, $tabel);

    if ($row != NULL) {
        if ($row->level == $level) {
            return true;
        } else {
            return false;
        }
    }
}






?>