<?php

class master_model {

    protected function fetch_post_files() {
        return scandir("./content", 1);
    }

    protected function fetch_posts( $num, $files ) {
        // If asking for more posts then change # of posts
        if ($num > (count($files) - 2) ) $num = (count($files) - 2);

        $posts = array();

        for($i = 0; $i < $num; $i++){
            $content = file_get_contents("./content/" . $files[$i]);
            array_push($posts, $content);
        }

        return $posts;
    }

}