<?php

class master_controller {

    protected function load_config() {
        return parse_ini_file("config.ini", true);
    }

    protected function prepare_config() {
        $config = $this -> load_config();
        $config['siteinfo']['head_title'] = "test";
        return $config;
    } 

    protected function load_twig() {
        $twig =  new Twig_Environment(
            new Twig_Loader_Filesystem("./views"),
            array(
                'debug' => true
            )
            //array( "cache" => "./views/cache" )
        );

        $twig -> addExtension(new Twig_Extension_Debug());
        return $twig;
    }

    protected function process_page( $mainpage, $config, $data ) {

        $twig = $this -> load_twig();

        $tpl = $twig -> load($mainpage);

        echo $tpl -> render(
            array(
                "msg" => "Hello, World!",
                "settings" => $config,
                "content" => $data
            )
        );
    }
}