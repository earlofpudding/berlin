<?php

// Universal functions uesd across platform

function url_seg ($seg) {
    isset($_GET['url']) ? $url = $_GET['url'] : $url = '';
    $segments = explode('/', $url);
    return @$segments[$seg];
}

