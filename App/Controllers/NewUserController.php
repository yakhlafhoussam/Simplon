<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Controllers\AuthController;

class NewUserController extends Controller
{
    public function index()
    {
        $data = [
            'head' => 'users',
        ];
        $this->view('pages.Admin.newUser', $data);
    }
    public function addNew()
    {
        $data = AuthController::signup();
        $data['head'] = 'users';
        $this->view('pages.Admin.newUser', $data);
    }
}