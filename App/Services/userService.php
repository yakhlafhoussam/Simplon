<?php

namespace App\Services;

use App\Repositories\userRepositorie;

class userService
{
    public function login($email, $password)
    {
        if (empty($email) || empty($password)) {
            $errormsg = 'Please fill in all fields';
            return $errormsg;
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errormsg = 'Invalid email';
            return $errormsg;
        }
        $repo = new userRepositorie();
        $result = $repo->login($email, $password);
        if ($result && password_verify($password, $result[0]['password'])) {
            $_SESSION['id'] = $result[0]['id'];
            $_SESSION['role'] = $result[0]['role'];
            $result = [];
            return 'succes';
        } else {
            $errormsg = 'Incorrect email or password';
            return $errormsg;
        }
    }
    public function signup($data)
    {
        if (empty($data['first']) || empty($data['last']) || empty($data['email']) || empty($data['password']) || empty($data['role'])) {
            $errormsg = 'Please fill in all fields';
            return $errormsg;
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errormsg = 'Invalid email';
            return $errormsg;
        }
        $repo = new userRepositorie();
        $result = $repo->login($data['email']);
        if (count($result) > 0) {
            $errormsg = 'Email already registered';
            return $errormsg;
        } else {
            $repo->signup($data);
            return 'succes';
        }
    }
}
