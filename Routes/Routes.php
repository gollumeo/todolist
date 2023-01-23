<?php

namespace App\Routes;

use Bramus\Router\Router;
use App\Controllers\HomeController;
use App\Controllers\TaskController;

$router = new Router();

$router->get('/', function() {
    (new HomeController)->home();
});

$router->run();

$router->get('/show', function() {
    (new HomeController)->show();
});

$router->run();

$router->get('/create', function () {
    (new TaskController)->create();
});

$router->run();
