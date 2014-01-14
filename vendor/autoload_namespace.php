<?php

/* register autoloader here */



$closure = function($className) {
    require_once __DIR__ . "/../vendor/" . $className . ".php";
};

spl_autoload_register($closure);