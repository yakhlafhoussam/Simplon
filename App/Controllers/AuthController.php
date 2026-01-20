<?php

namespace App\Controllers;

use App\Core\Database;
use PDO;

class AuthController
{
    public static function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (empty($email) || empty($password)) {
            $errormsg = 'Please fill in all fields';
            $_SESSION['errormsg'] = $errormsg;
            header('location: /');
            exit();
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errormsg = 'Invalid email';
            $_SESSION['errormsg'] = $errormsg;
            header('location: /');
            exit();
        } else {
            $conn = Database::get_instance();
            $query = 'SELECT * FROM users WHERE email = :email';
            $params = [
                ':email' => $email
            ];
            $user = $conn->query($query, $params);
            if ($user && password_verify($password, $user[0]['password'])) {
                $_SESSION['id'] = $user[0]['id'];
                $_SESSION['role'] = $user[0]['role'];
                $errormsg = 'Correct login';
                $_SESSION['errormsg'] = $errormsg;
                header('location: /');
                exit();
            } else {
                $errormsg = 'Incorrect email or password';
                $_SESSION['errormsg'] = $errormsg;
                header('location: /');
                exit();
            }
        }
    }
    public function logout()
    {
        unset($_SESSION);
        session_destroy();
        header('Location: /');
    }
}
