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

    /* public function create()
    {
        // Handle task creation
        $task = $_POST['task'];
        $user_id = 8;
        $response = $this->taskService->create($task, $user_id);
        return $this->viewTask('create', $response);
    } */

    public function show()
    {
        // Retrieve and display all tasks
        $task_list = $this->taskService->getAllTasks(8);
        return $this->viewTask('show', ["task_list" => $task_list]);
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

    public function delete()
    {
        // Handle task deletion
        $id = $_POST['id'];
        $response = $this->taskService->delete($id);
        return $this->viewTask('delete', $response);
    } */
}
