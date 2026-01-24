<?php

namespace App\Repositories;

use App\Core\Database;

class classRepositorie
{
    public function addNewClass($name, $year, $teacher)
    {
        $conn = Database::get_instance();
        $query = 'INSERT INTO class (name, school_year) VALUES (:name, :year) RETURNING id';
        $params = [
            ':name' => $name,
            ':year' => $year
        ];
        $classId = $conn->insertAndGetId($query, $params);
        $query = 'INSERT INTO teachers (class_id, teacher_id) VALUES (:class, :teacher)';
        $params = [
            ':class' => $classId,
            ':teacher' => $teacher
        ];
        $conn->query($query, $params);
    }

    public function getAllClass()
    {
        $conn = Database::get_instance();
        $query = "SELECT 
                    c.id AS class_id,
                    c.name AS class_name,
                    c.school_year,
                    COUNT(u.id) FILTER (WHERE u.role = 'student') AS students_count,
                    tu.first_name || ' ' || tu.last_name AS trainer_name
                FROM class c
                LEFT JOIN users u 
                    ON u.class_id = c.id
                LEFT JOIN teachers t 
                    ON t.class_id = c.id
                LEFT JOIN users tu 
                    ON tu.id = t.teacher_id
                GROUP BY 
                    c.id,
                    c.name,
                    c.school_year,
                    tu.first_name,
                    tu.last_name";
        $class = $conn->query($query);
        return $class;
    }

    public function getClass($id)
    {
        $conn = Database::get_instance();
        $query = "SELECT 
                    c.id AS class_id,
                    c.name AS class_name,
                    c.school_year,
                    COUNT(u.id) FILTER (WHERE u.role = 'student') AS students_count,
                    tu.first_name || ' ' || tu.last_name AS trainer_name
                FROM class c
                LEFT JOIN users u 
                    ON u.class_id = c.id
                LEFT JOIN teachers t 
                    ON t.class_id = c.id
                LEFT JOIN users tu 
                    ON tu.id = t.teacher_id
                WHERE c.id = :id
                GROUP BY 
                    c.id,
                    c.name,
                    c.school_year,
                    tu.first_name,
                    tu.last_name";
        $params = [
            ':id' => $id
        ];
        $class = $conn->query($query, $params);
        return $class;
    }

    public function getStudent($id)
    {
        $conn = Database::get_instance();
        $query = "SELECT 
                    u.id,
                    u.first_name,
                    u.last_name,
                    u.email,
                    u.created_date
                FROM users u
                WHERE u.class_id = :class_id
                    AND u.role = 'student'";
        $params = [
            ':class_id' => $id
        ];
        $class = $conn->query($query, $params);
        return $class;
    }

    public function getSprint($id)
    {
        $conn = Database::get_instance();
        $query = "SELECT 
                    s.id AS sprint_id,
                    s.name AS sprint_name,
                    s.start_date,
                    s.end_date,
                    COUNT(b.id) AS briefs_count
                FROM sprint s
                LEFT JOIN brief b 
                    ON b.sprint_id = s.id
                WHERE s.class_id = :class_id
                GROUP BY 
                    s.id,
                    s.name,
                    s.start_date,
                    s.end_date";
        $params = [
            ':class_id' => $id
        ];
        $class = $conn->query($query, $params);
        return $class;
    }
}
