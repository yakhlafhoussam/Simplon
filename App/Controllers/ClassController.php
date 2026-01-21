<?php

namespace App\Controllers;

use App\Core\Controller;

class ClassController extends Controller
{
    public function index()
    {
        $data = [
            'head' => 'class',
        ];
        $this->view('pages.Admin.class', $data);
    }
}