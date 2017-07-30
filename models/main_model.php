<?php

class main_model extends master_model {

    public function __construct() {

    }


    public function load_data( $config, $max_length = 0 ) {
        $posts_content = $this->fetch_posts($config['homepage']['posts'], self::fetch_post_files());

        $parsed = array();

        foreach($posts_content as $post_content) {

            // Limit length of post if needed
            if( $max_length !== 0 ) $post_content = substr($post_content, 0, $max_length) . "...";

            $content = Parsedown::instance()->text($post_content);

            array_push($parsed, $content);
        }

        return $parsed;
    }

}