<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Services\userService;
use App\Services\classService;

class NewClassController extends Controller
{
    public function index()
    {
        $service  = new userService();
        $result = $service->getAllTeacher();
        $data = [
            'head' => 'class',
            'teacher' => $result
        ];
        $this->view('pages.Admin.newClass', $data);
    }
    public function addNew()
    {
        $serviceClass = new classService();
        $serviceUser = new userService();
        $teachers = $serviceUser->getAllTeacher();
        $result = $serviceClass->addNewClass();
        if ($result == 'succes') {
            $data = [
                'head' => 'class',
                'teacher' => $teachers,
                'msg' => 'Class created successfully!'
            ];
        } else {
            $data = [
                'head' => 'class',
                'teacher' => $teachers,
                'errormsg' => $result
            ];
        }
        $this->view('pages.Admin.newClass', $data);
    }
}
