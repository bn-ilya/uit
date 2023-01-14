<?php

class Component {
    private $template;
    private $componentPath = __DIR__ . DIRECTORY_SEPARATOR;

    function __construct($template)
    {
        $this->template = $template;
    }

    public function initialization() {
        include 'include.php';
    }
}


