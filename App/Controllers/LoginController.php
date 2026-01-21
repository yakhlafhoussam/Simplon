<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Controllers\AuthController;

class LoginController extends Controller
{
    public function index()
    {
        $this->view('pages.login');
    }
    public function login()
    {
        $login = AuthController::login();
        if ($login == 'succes') {
            header('location: /');
            exit();
        } else {
            $data = [
                'msg' => $login,
            ];
            $this->view('pages.login', $data);
        }
    }
}
