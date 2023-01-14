<?php

class Tasklist extends Api {
    protected function getAllTasks() {
        $request = self::getFullUrl() . "/tasks";

        $ch = curl_init();
        self::authorization($ch);
        self::setUrl($ch, $request);
        self::setReturnTransfer($ch);
        $result = curl_exec($ch);
        
        curl_close($ch);
        
        return $result;
    }
}