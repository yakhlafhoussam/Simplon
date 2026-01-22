<?php

namespace App\Controllers;

use App\Services\userService;

class AuthController
{
    public static function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $service = new userService();
        $result = $service->login($email, $password);
        return $result;
    }
    public static function signup()
    {
        $data = [
            'first' => $_POST['first_name'],
            'last' => $_POST['last_name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'role' => $_POST['role'],
            'class' => $_POST['class_id']
        ];
        $service = new userService();
        $result = $service->signup($data);
        if ($result != 'succes') {
            $data['errormsg'] = $result;
        } else {
            $data = [
                'msg' => 'Account created successfully!',
            ];
        }
        $_POST = [];
        return $data;
    }
    public function logout()
    {
        unset($_SESSION);
        session_destroy();
        header('location: /');
        exit();
    }
}
