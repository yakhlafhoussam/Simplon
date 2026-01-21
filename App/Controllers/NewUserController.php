<?php

namespace App\Controllers;

use App\Core\Controller;

class NewUserController extends Controller
{
    public function index()
    {
        $data = [
            'head' => 'users',
        ];
        $this->view('pages.Admin.newUser', $data);
    }
}