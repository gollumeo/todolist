<?php
class Task
{
    private $id;
    private $title;
    private $task;
    private $status;
    private $user_id;

    public function __construct()
    {
    }

    public function getId()
    {
        return $this->id;
    }

    /* public function setId($id)
    {
        $this->id = $id;
    } */

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTask()
    {
        return $this->task;
    }

    public function setTask($task)
    {
        $this->task = $task;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
}
