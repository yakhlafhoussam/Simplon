<?php

namespace App\Repositories;

use App\Core\Database;

class userRepositorie
{
    public function login($email)
    {
        $conn = Database::get_instance();
        $query = 'SELECT * FROM users WHERE email = :email';
        $params = [
            ':email' => $email
        ];
        $user = $conn->query($query, $params);
        return $user;
    }

    public function signup($data)
    {
        $conn = Database::get_instance();
        $query = 'INSERT INTO users (first_name, last_name, email, password, role, class_id) VALUES (:first, :last, :email, :password, :role, :class_id)';
        $params = [
            ':first' => $data['first'],
            ':last' => $data['last'],
            ':email' => $data['email'],
            ':password' => password_hash($data['password'], PASSWORD_DEFAULT),
            ':role' => $data['role'],
            ':class_id' => $data['class_id'] ?? NULL
        ];
        $conn->query($query, $params);
    }

    public function getAllUsers()
    {
        $conn = Database::get_instance();
        $query = 'SELECT * FROM users';
        $user = $conn->query($query);
        return $user;
    }
}
