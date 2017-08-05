<?php

class post_model extends master_model {

    public function load_data( $config ) {

        // Check if url isnt empty
        if(url_seg(2) !== null && url_seg(2) !== "")
            $url = url_seg(2);
        else {
            http_response_code(404);
            die("Error 404 - Page not found :( ");
        }

        $pad = str_replace("-", " ", $url);
        $pad = ucwords($pad);

        // FIX THIS, FIND BETTER WAY TO FIND THE FILE
        foreach (glob("./content/*$pad*.md") as $filename) {
                $data = parent::pull_post($filename);
        }

        return $data;

    }

}