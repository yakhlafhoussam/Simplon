<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Services\classService;

class ViewClassController extends Controller
{
    public function index()
    {
        $classId = $_GET['id'];
        $service = new classService();
        $classinfo = $service->getClass($classId);
        $student = $service->getStudent($classId);
        $sprint = $service->getSprint($classId);
        $data = [
            'head' => 'class',
            'class' => $classinfo,
            'students' => $student,
            'sprints' => $sprint
        ];
        $this->view('pages.Admin.viewClass', $data);
    }
}