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
    public function getUserInfo($id)
    {
        $conn = Database::get_instance();
        $query = 'SELECT 
                    u.id AS user_id, 
                    u.first_name, 
                    u.last_name, 
                    u.email, 
                    u.role, 
                    u.created_date, 
                    c.id AS class_id, 
                    c.name AS class_name, 
                    c.school_year, 
                    t.id AS teacher_id, 
                    tu.first_name AS teacher_first_name, 
                    tu.last_name AS teacher_last_name, 
                    s.id AS sprint_id, 
                    s.name AS sprint_name, 
                    s.start_date, 
                    s.end_date, 
                    b.id AS brief_id, 
                    b.title AS brief_title, 
                    b.type AS brief_type, 
                    e.id AS evaluation_id, 
                    e.level, 
                    e.review, 
                    e.created_at AS evaluation_date, 
                    l.id AS livrable_id, 
                    l.url AS livrable_url, 
                    l.date_submitted
                FROM users u
                LEFT JOIN class c ON u.class_id = c.id
                LEFT JOIN teachers t ON t.class_id = c.id
                LEFT JOIN users tu ON tu.id = t.teacher_id
                LEFT JOIN sprint s ON s.class_id = c.id
                LEFT JOIN brief b ON b.sprint_id = s.id
                LEFT JOIN evaluation e ON e.brief_id = b.id AND e.student_id = u.id
                LEFT JOIN livrable l ON l.brief_id = b.id AND l.student_id = u.id
                WHERE u.id = :id
                    ';
        $params = [
            ':id' => $id
        ];
        $user = $conn->query($query, $params);
        return $user;
    }
}
