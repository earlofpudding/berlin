<?php

require_once('./etc/config.php');

$page = url_seg(0);

switch($page) {
    default:
        $c = new main_controller();
        break;
}