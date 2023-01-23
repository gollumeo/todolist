<?php

namespace App\Core;

class Controller
{
    /*
    * @var $view, $data
    * return view
    */
    public function viewTask($view, $data = [])
    {
        extract($data);
        require_once(__ROOT__.'/Resources/views/task/'.$view.'.php');
    }

    public function viewUser($view, $data = [])
    {
        extract($data);
        require_once(__ROOT__ . '/Resources/views/users/' . $view . '.php');
    }

    public function viewHome($view, $data = []) {
        extract($data);
        require_once(__ROOT__ . '/Resources/views/' . $view . '.php');
    }

    public function viewShared($view, $data = []) {
        extract($data);
        require_once(__ROOT__ . '/Resources/views/shared' . $view . '.php');
    }
}