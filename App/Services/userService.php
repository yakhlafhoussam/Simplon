<?php

namespace App\Services;

use App\Repositories\userRepositorie;

class userService
{
    private $repo;

    public function __construct()
    {
        $this->repo = new userRepositorie();
    }

    public function login($email, $password)
    {
        if (empty($email) || empty($password)) {
            $errormsg = 'Please fill in all fields';
            return $errormsg;
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errormsg = 'Invalid email';
            return $errormsg;
        }
        $result = $this->repo->login($email, $password);
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
        $result = $this->repo->login($data['email']);
        if (count($result) > 0) {
            $errormsg = 'Email already registered';
            return $errormsg;
        } else {
            $this->repo->signup($data);
            return 'succes';
        }
    }

    public function getAllUsers()
    {
        $result = $this->repo->getAllUsers();
        return $result;
    }
    public function getUser($id)
    {
        $result = $this->repo->getUserInfo($id);
        return $result;
    }

    public function getAllTeacher()
    {
        $result = $this->repo->getAllTeacher();
        return $result;
    }
}
