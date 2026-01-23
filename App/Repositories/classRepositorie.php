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
}
