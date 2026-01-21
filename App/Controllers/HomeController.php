<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'head' => 'home',
        ];
        $this->view('pages.home', $data);
    }
}
