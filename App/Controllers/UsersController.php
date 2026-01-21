<?php

namespace App\Controllers;

use App\Core\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $data = [
            'head' => 'users',
        ];
        $this->view('pages.Admin.users', $data);
    }
}