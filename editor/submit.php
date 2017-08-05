<?php

if ( (isset($_POST['title']))
    && (isset($_POST['content']))) {

    $title = $_POST['title'];
    $content = $_POST['content'];

    //clean title of any symbols that can't be used in a filename
    //Need to ucwords because of post_model name composition format
    //figure out better method for this ... its so shit
    $title = strtolower($title);
    $title = ucwords($title);
    $title = preg_replace('/[^a-zA-Z0-9\-\._ ]/','', $title);

    $date = date('d-m-Y');

    $f = fopen("../content/$date - $title.md", "w");

    if($f) {
        fwrite($f, $content);
        fclose($f);
    } else {
        die ("Couldn't write the file, probably a premission issue");
    }

}else {
    die("wtf dude");
}