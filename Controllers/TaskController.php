<?php

namespace App\Controllers;
use App\Core\Controller;

use App\Services\TaskService;

class TaskController extends Controller
{
    private $taskService;

    public function __construct()
    {
        $this->taskService = new TaskService();
    }

    public function createTask()
    {
        // Handle task creation
        $task = $_POST['task'];
        $title = $_POST['title'];
        $status = $_POST['status'];
        //$user_id = $_POST['user_id'];
        $this->taskService->create($task, $title, $status, 8);
        header('Location: /show');
    }

    public function show()
    {
        // Retrieve and display all tasks
        $task_list = $this->taskService->getAllTasks(8);
        return $this->viewTask('show', ["task_list" => $task_list]);
    }

    public function display()
    {
        return $this->viewTask('create');
    }

    public function delete()
    {
        $id = $_POST['id'];
        $this->taskService->delete($id);
        header('Location: /show');

    }

    /* public function update()
    {
        // Handle task update
        $id = $_POST['id'];
        $task = $_POST['task'];
        $user_id = 8;
        $response = $this->taskService->update($id, $task, $user_id);
        return $this->viewTask('update', $response);
    }

    */
}
