<?php
include_once 'core/Database.php';
include_once './models/Task.php';

class TaskRepository
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function findAll()
    {
        $query = 'SELECT * FROM tasks';
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id)
    {
        $query = 'SELECT * FROM tasks WHERE id = :id';
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // vérifier qu'on accède bien aux colonnes de la table user (relationnal)
    public function create(Task $task)
    {
        $query = 'INSERT INTO tasks (task, title, status, user_id) VALUES (:task, :title, :status, :user_id)';
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':task', $task->getTask());
        $stmt->bindParam(':title', $task->getTitle());
        $stmt->bindParam(':status', $task->getStatus());
        $stmt->bindParam(':user_id', $task->getUserId());
        return $stmt->execute();
    }

    public function update(Task $task)
    {
        $query = 'UPDATE tasks SET task = :task, title=:title, status = :status WHERE id = :id';
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':task', $task->getTask());
        $stmt->bindParam(':title', $task->getTitle());
        $stmt->bindParam(':status', $task->getStatus());
        return $stmt->execute();
    }

    public function delete($id)
    {
        $query = 'DELETE FROM tasks WHERE id = :id';
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}