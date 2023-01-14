<?php

class Tasklist extends Api {
    protected function getAllTasks() {
        $request = self::getFullUrl() . "/tasks";
        return $request;
    }
}