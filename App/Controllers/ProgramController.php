<?php

namespace App\Controllers;

use App\Core\Controller;

class ProgramController extends Controller
{
    public function index()
    {
        $data = [
            'head' => 'program',
        ];
        $this->view('pages.Admin.program', $data);
    }
}