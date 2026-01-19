<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;
use App\Core\DataBase;

session_start();

$router = new Router();

if (!isset($_SESSION['id'])) {
    $router->get('/', 'LoginController@index');
} else {
    $router->get('/', 'DashboardController@index');
}

$router->dispatch();