<?php
include_once 'repositories/TaskRepository.php';

class TaskService
{
    private $taskRepository;

    public function __construct()
    {
        $this->taskRepository = new TaskRepository();
    }

    public function create($task, $title, $status, $user_id)
    {
        // Validate input
        if (empty($task)) {
            return 'Task is required';
        }

        // Create the task
        $newTask = new Task();
        $newTask->setTask($task);
        $newTask->setTitle($title);
        $newTask->setStatus($status);
        $newTask->setUserId($user_id);
        $this->taskRepository->create($task, $user_id);

        return 'Task created successfully';
    }

    public function update($id, $task, $title, $status)
    {
        // Validate input
        if (empty($task)) {
            return 'Task is required';
        }

        // Update the task
        $updated_task = $this->taskRepository->findById($id);
        $updated_task->setTask($task);
        $updated_task->setTitle($title);
        $updated_task->setStatus($status);
        $this->taskRepository->update($updated_task);

        return 'Task updated successfully';
    }

    public function delete($id)
    {
        // Delete the task
        $this->taskRepository->delete($id);

        return 'Task deleted successfully';
    }

    public function getAllTasks($user_id)
    {
        return $this->taskRepository->findAll($user_id);
    }

    public function getTaskById($id)
    {
        return $this->taskRepository->findById($id);
    }
}