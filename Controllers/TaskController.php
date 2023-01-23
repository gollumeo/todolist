<?php
namespace App\Controllers;

use App\Core\Controller;

class TaskController extends Controller
{
    public function create()
    {
        return $this->viewTask('create');
    }
}
