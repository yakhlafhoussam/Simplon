<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Services\userService;

class UsersController extends Controller
{
    public function index()
    {
        $service = new userService();
        $result = $service->getAllUsers();
        $data = [
            'head' => 'users',
            'users' => $result
        ];
        $this->view('pages.Admin.users', $data);
    }
}


/* repo sql */

/* serv logic */