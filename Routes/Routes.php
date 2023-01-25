<?php

namespace App\Routes;

use App\Controllers\HomeController;
use App\Controllers\TaskController;
use App\Controllers\UserController;
use Bramus\Router\Router;

$router = new Router();

$router->get('/', function () {
    (new HomeController)->home();
});

$router->get('/show', function () {
    (new TaskController)->show();
});

$router->get('/create', function () {
    (new TaskController)->display();
});

$router->post('/create-task', function () {
    (new TaskController)->createTask();
});
$router->post('/delete-task', function () {
    (new TaskController)->delete();
});

$router->get('/signing', function () {
    (new UserController)->signing();
});

$router->get('/login', function () {
    (new UserController)->login();
});

$router->post('/validation', function () {
    (new UserController)->validation();
});


$router->post('/register-user', function () {
    (new UserController)->createUser();
});

$router->run();
