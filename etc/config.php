<?php

// Universal Constants, and Includes

// Universal Includes
require_once('./etc/functions.php');

// CONSTANTS
CONST BASEDIR = "/berlin";

// AUTOLOADERS
spl_autoload_register(function ($class) {
    $class = strtolower($class);
    if(strpos($class, 'controller'))
        require_once 'controllers/' . $class . '.php';
    elseif(strpos($class,'model'))
        require_once 'models/' . $class . '.php';
});

require_once './etc/twig/Autoloader.php';
Twig_Autoloader::register();
