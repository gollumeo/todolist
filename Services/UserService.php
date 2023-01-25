<?php

namespace App\Services;

use App\Controllers\UserController;
use App\repositories\UserRepository;
use App\models\User;

class UserService
{
    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function display()
    {
        return $this->viewUser('register');
    }

    public function register($username, $user_email, $password)
    {
        // Validate input
        if (empty($username) || empty($password)) {
            return 'Username and password are required';
        }

        // Check if username already exists
        $existingUser = $this->userRepository->findByUserEmail($user_email);
        if ($existingUser) {
            return 'User email already exists';
        }

        // Hash the password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // Create the user
        $user = new User();
        $user->setUserEmail($user_email);
        $user->setUsername($username);
        $user->setPassword($password);
        $this->userRepository->create($username, $user_email, $password);

        return 'Registration successful';
    }

    public function login($user_email, $password)
    {
        // Validate input
        if (empty($username) || empty($password)) {
            return 'Username and password are required';
        }

        // Find the user by username
        $user = $this->userRepository->findByUserEmail($user_email);

        // Check if user exists and verify the password
        if ($user && password_verify($password, $user['password'])) {
            // Start a new session
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $username;
            return 'Login successful';
        } else {
            return 'Invalid username or password';
        }
    }

    public function logout()
    {
        // End the current session
        session_start();
        session_destroy();
        return 'Logout successful';
    }
    /* 
    public function updatePassword($id, $oldPassword, $newPassword, $confirmPassword)
    {
        // Validate input
        if (empty($oldPassword) || empty($newPassword) || empty($confirmPassword)) {
            return 'All fields are required';
        }
        if ($newPassword !== $confirmPassword) {
            return 'New password and confirmation do not match';
        }
        // Find the user by id
        $user = $this->userRepository->findById($id);
        // Check if user exists and verify the old password
        if ($user && password_verify($oldPassword, $user['password'])) {
            // Hash the new password
            $newPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            // Update the password
            $this->userRepository->update($id, $user['username'], $newPassword);
            return 'Password updated successfully';
        } else {
            return 'Invalid old password';
        }
    } */
}