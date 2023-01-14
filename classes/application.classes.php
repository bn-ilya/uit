<?php

class Application {
    public static function includeComponent($nameComponent, $nameTemplate = ".default") {
        include ('components/' . $nameComponent . '/component.php');
        $component = new Component($nameTemplate);
        $component->initialization();
    }
}