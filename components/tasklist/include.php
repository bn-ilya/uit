<?php

include CLASSES_PATH . '/api.classes.php';
include $this->componentPath . 'classes/tasklist.classes.php';
include $this->componentPath . 'classes/tasklistcontr.classes.php';
include $this->componentPath . 'classes/tasklistview.classes.php';

$taskview = new TaskListView();
$taskview->showTasks();