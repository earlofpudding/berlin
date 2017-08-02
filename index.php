<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./etc/base.php');

//SET TO 1 FOR VAGRANT
//RETURN TO 0 FOR PRODUCTION
$page = url_seg(1);

switch($page) {
    case "article":
        new post_controller();
        break;
    default:
        new main_controller();
        break;
}