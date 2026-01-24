<?php

namespace App\Controllers;

use App\Core\Controller;

class AddStudentController extends Controller
{
    public function index()
    {
        $classId = $_GET['id'];
        $data = [
            'head' => 'class',
        ];
        $this->view('pages.Admin.addStudent', $data);
    }
}