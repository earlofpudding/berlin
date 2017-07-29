<?php

// Universal Constants, and Includes

// CONSTANTS
CONST BASEDIR = "/berlin";

CONST HOME_POSTS = 5; // How many posts to fetch for the homepage

// Universal Includes
require_once('./etc/functions.php');

// AUTOLOADERS
spl_autoload_register (function ($class) {
    $class = strtolower($class);
    if(strpos($class, 'controller'))
        require_once 'controllers/' . $class . '.php';
    elseif(strpos($class,'model'))
        require_once 'models/' . $class . '.php';
});

require_once ('./etc/twig/Autoloader.php');
Twig_Autoloader::register();
