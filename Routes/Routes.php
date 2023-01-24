<?php

namespace App\Routes;

use Bramus\Router\Router;
use App\Controllers\HomeController;
use App\Controllers\TaskController;

$router = new Router();

$router->get('/', function() {
    (new HomeController)->home();
});


$router->get('/show', function() {
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

$router->run();

/* $router->get('/', function () {
    (new HomeController)->header();
});

$router->run(); */
