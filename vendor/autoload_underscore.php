<?php

/* register autoloader here */

$closure = function($className) {
    $trueClassName = str_replace('_', '/', $className);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $trueClassName . '.php';
};
spl_autoload_register($closure);
