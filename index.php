<?php

require_once('./etc/base.php');

$page = url_seg(0);

switch($page) {
    case "article":
        new post_controller();
        break;
    default:
        new main_controller();
        break;
}