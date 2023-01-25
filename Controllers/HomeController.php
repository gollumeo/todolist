<?php

namespace App\Controllers;

use App\Core\Controller;



class HomeController extends Controller
{
    /*
    * return view
    */
    public function home()
    {
        //$username = isset($_POST['username']) ? $_POST['username'] : "Guest";
        return $this->viewHome('home', ["name" => ""]);
    }
    
    public function show()
    {
        return $this->viewTask('show');
    }

    // public function header() {
    //     return $this->viewShared('header');
    // }

    // public function footer() {
    //     return $this->viewShared('footer');
    // }
}
