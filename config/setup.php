<?php

$db =new PDO('mysql:host=' . 'db-todolist.cld0mu6jdw4b.eu-west-3.rds.amazonaws.com' . ';dbname=' . 'todolist', 'admin', 'K35zNf7ACwwDSUcvh6F5');

// Tasks table
$tasks_table = "CREATE TABLE IF NOT EXISTS tasks (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL,
    status VARCHAR(15) NOT NULL,
    title VARCHAR(50) NOT NULL,
    user_id INT(11) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
    )";

// Users table
$users_table = "CREATE TABLE IF NOT EXISTS users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
    )";

try {
    $db->exec($tasks_table);
    $db->exec($users_table);
    echo "Tables created successfully";
} catch (PDOException $e) {
    echo "Error creating tables: " . $e->getMessage();
}