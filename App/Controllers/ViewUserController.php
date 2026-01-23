<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Services\userService;

class ViewUserController extends Controller
{
    public function index()
    {
        $service = new userService();
        $result = $service->getUser($_GET['id']);
        $data = [
            'head' => 'users',
            'users' => $result
        ];
        $this->view('pages.Admin.viewUser', $data);
    }
}