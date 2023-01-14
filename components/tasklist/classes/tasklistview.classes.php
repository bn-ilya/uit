<?php 

class TasklistView extends Tasklist {
    public function getTasks() {
        $tasks = $this->getAllTasks();
        return $tasks;
    }
}