<?php
require_once 'config/config.php';
require_once './Core/Database.php';

$db = Database::getInstance()->getConnection();

// Tasks table
$tasks_table = "CREATE TABLE IF NOT EXISTS tasks (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL,
    status VARCHAR(15) NOT NULL,
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