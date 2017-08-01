<?php

class master_model {

    protected function fetch_post_files() {
        return scandir("./content", 1);
    }

    protected function fetch_posts( $num, $files ) {
        // If asking for more posts then change # of posts
        if ($num > (count($files) - 2) ) $num = (count($files) - 2);

        $posts = array(
            "titles" => array(),
            "slugs" => array(),
            "content" => array()
        );

        for($i = 0; $i < $num; $i++){
            // Pull title of post from filename
            $title = $files[$i];
            $title = substr($title, 13, strlen($title));
            $title = str_replace(".md", "", $title);
            array_push($posts["titles"], $title);

            // Create slug from title
            $slug = str_replace(" ", "-", $title);
            preg_replace('/[^A-Za-z0-9\-]/', '', $slug);
            $slug = '/'.strtolower($slug);
            array_push($posts["slugs"], $slug);

            // Pull content from file
            $content = file_get_contents("./content/" . $files[$i]);
            array_push($posts["content"], $content);

        }

        return $posts;
    }

    protected function make_link( $slug, $config, $type = "article" ){
        if($type === "article"){
            $link = $config["siteinfo"]["basedir"] . $config["siteinfo"]["articledir"] . $slug;
            return $link;
        }
    }

}