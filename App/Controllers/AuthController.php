<?php

namespace App\Controllers;

use App\Core\Database;

class AuthController
{
    public static function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (empty($email) || empty($password)) {
            $errormsg = 'Please fill in all fields';
            return $errormsg;
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errormsg = 'Invalid email';
            return $errormsg;
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
                return 'succes';
            } else {
                $errormsg = 'Incorrect email or password';
                return $errormsg;
            }
        }
    }
    public function logout()
    {
        unset($_SESSION);
        session_destroy();
        header('location: /');
        exit();
    }
}
