<?php

namespace App\Controllers;

use App\Core\Controller;

class NotFoundController extends Controller
{
    public function index()
    {
        $this->view('pages.notfound');
    }
}
