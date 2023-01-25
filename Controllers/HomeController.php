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
        return $this->viewHome('home', ["name" => "Guest"]);
    }

    public function home_logged_in()
    {
        if (!session_start()) {
            session_start();
        }
        $username = isset($_SESSION['username']) ? $_SESSION['username'] : "Guest";
        return $this->viewHome('home', ["name" => $username]);
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
