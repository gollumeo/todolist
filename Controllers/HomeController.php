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
        return $this->viewHome('home',["name" => "Guest"]);
    }


}