<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Services\classService;

class ClassController extends Controller
{
    public function index()
    {
        $service = new classService();
        $result = $service->getAllClass();
        $data = [
            'head' => 'class',
            'class' => $result
        ];
        $this->view('pages.Admin.class', $data);
    }
}