<?php
namespace App\models;
class User {
    private $id;
    private $username;
    private $user_email;
    private $password;

    public function __construct() {
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    
    public function getUserEmail() {
        return $this->user_email;
    }

    public function setUserEmail($user_email) {
        $this->user_email = $user_email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
}