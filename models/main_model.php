<?php

class main_model extends master_model {

    public function load_data( $config, $max_length = 0 ) {

        // Pull content array based on homepage.posts in config
        $posts_content = $this->fetch_posts($config['homepage']['posts'], self::fetch_post_files());

        $parsed = array();

        $i = 0;

        foreach($posts_content["content"] as $post_content) {

            $payload = array();

            // Limit length of post if needed
            if( $max_length !== 0 ) $post_content = substr($post_content, 0, $max_length) . "...";

            $content = Parsedown::instance()->text($post_content);

            $payload["title"] = $posts_content["titles"][$i];
            $payload["link"] = $this->make_link($posts_content["slugs"][$i], $config);
            $payload["body"] = $content;

            array_push( $parsed, $payload);

            $i++;
        }

        return $parsed;
    }

}