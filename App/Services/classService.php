<?php

namespace App\Services;

use App\Repositories\classRepositorie;

class classService
{
    private $repo;

    public function __construct()
    {
        $this->repo = new classRepositorie();
    }

    public function addNewClass()
    {
        $className = $_POST['name'];
        $classYear = $_POST['school_year'];
        $classTeacher = $_POST['teacher_id'];
        if (empty($className) || empty($classYear) || empty($classTeacher)) {
            $errormsg = 'Please fill in all fields';
            return $errormsg;
        }
        $this->repo->addNewClass($className, $classYear, $classTeacher);
        $_POST = [];
        return 'succes';
    }

    public function getAllClass()
    {
        $result = $this->repo->getAllClass();
        return $result;
    }

    public function getClass($id)
    {
        $result = $this->repo->getClass($id);
        return $result;
    }

    public function getStudent($id)
    {
        $result = $this->repo->getStudent($id);
        return $result;
    }

    public function getSprint($id)
    {
        $result = $this->repo->getSprint($id);
        return $result;
    }
}
