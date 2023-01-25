<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Services\UserService;

class UserController extends Controller
{
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function signing()
    {
        return $this->viewUser('signing');
    }

    public function validation()
    {
        $user_email = $_POST['user_email'];
        $password = $_POST['password'];
        if ($this->userService->login($user_email, $password)) {

            header('Location: /home');
        } else {
            echo "error";
        }

    }


    public function login()
    {
        return $this->viewUser('login');
    }


    public function createUser()
    {
        // Handle user creation/registration
        $username = $_POST['username'];
        $user_email = $_POST['user_email'];
        $password = $_POST['password'];
        //$user_id = $_POST['user_id'];
        $this->userService->register($username, $user_email, $password);
        header('Location: /home');
    }
}