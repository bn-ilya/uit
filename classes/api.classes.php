<?php

class Api {
    // User settings
    private static $username = "БондаренкоИлья";
    private static $pwd = "Robokop67";

    // URL settings
    private static $protocol = "https://";
    private static $socket = "ceshops.ru:8443";
    private static $baseName = "it";
    private static $uriApi = "hs/api_debug/v1";
    
    protected static function getFullUrl() {
        return $url = self::$protocol . self::$socket . self::$baseName . self::$uriApi;
    }

    protected static function authorization($ch) {
        curl_setopt($ch, CURLOPT_USERPWD, self::$username . ":" . self::$pwd);
    }

    protected static function setContentType($ch) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    }

    protected static function setHttpMethod($ch, $method) {
        switch ($method) {
            case "POST": 
                curl_setopt($ch, CURLOPT_POST, true);
        }
    }
}