<?php

$autoload_map = array(
    'Coffee\Bali'        => 'Coffee/Bali.php',
    'Coffee\BlueMontain' => 'Coffee/BlueMontain.php',
    'Coffee\Sumatra'     => 'Coffee/Sumatra.php',
    'Soda\Lemonade'     => 'Soda/Lemonade.php',
    'Soda\Juice\Orange' => 'Soda/Juice/Orange.php',
    'Wine\Bordeaux'     => 'Wine/Bordeaux.php',
    'Wine\Chinon'       => 'Wine/Chinon.php',
);

/* register autoloader here */

/*$closure = function($autoload_map) {
        require_once __DIR__ . DIRECTORY_SEPARATOR . $autoload_map . '.php';
};
spl_autoload_register($closure);*/

function closure($autoload_map){
    require_once __DIR__ . DIRECTORY_SEPARATOR . $autoload_map . '.php';
};
spl_autoload_register('closure');

/*
spl_autoload_register(function ($autoload_map)  {
    include __DIR__ . DIRECTORY_SEPARATOR . $autoload_map . '.php';
});*/


