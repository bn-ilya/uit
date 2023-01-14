<?php 

class TasklistView extends Tasklist {
    public function showTasks() {
        $tasks = $this->getAllTasks();
        echo $tasks;
    }
}