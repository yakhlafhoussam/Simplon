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
    public function addNew()
    {
        $first = $_POST['first_name'];
        $last = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $class_id = $_POST['class_id'];
        $data = [
            'head' => 'users',
        ];
        $this->view('pages.Admin.newUser', $data);
    }
}