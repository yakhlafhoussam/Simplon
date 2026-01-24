<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;

session_start();

$router = new Router();

if (!isset($_SESSION['id'])) {
    $router->get('/', 'LoginController@index');
} else {
    if ($_SESSION['role'] == 'admin') {
        $router->get('/users', 'UsersController@index');
        $router->get('/class', 'ClassController@index');
        $router->get('/program', 'ProgramController@index');
        $router->get('/users/newuser', 'NewUserController@index');
        $router->get('/users/viewuser', 'ViewUserController@index');
        $router->get('/class/newclass', 'NewClassController@index');
        $router->get('/class/newclass', 'NewClassController@index');
        $router->get('/class/viewclass', 'ViewClassController@index');
        $router->get('/class/addstudent', 'AddStudentController@index');
        $router->post('/class/newclass', 'NewClassController@addnew');
    }
    $router->get('/', 'HomeController@index');
}

$router->post('/login', 'LoginController@login');
$router->get('/logout', 'AuthController@logout');

$router->dispatch();