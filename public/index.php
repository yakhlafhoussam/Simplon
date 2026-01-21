<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;

session_start();

$router = new Router();

if (!isset($_SESSION['id'])) {
    $router->get('/', 'LoginController@index');
} else {
    $router->get('/', 'HomeController@index');
}

$router->post('/login', 'AuthController@login');
$router->get('/logout', 'AuthController@logout');

$router->dispatch();