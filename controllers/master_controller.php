<?php

abstract class master_controller {

    protected function __construct() {

    }

    public function load_twig () {
        return new Twig_Environment(
            new Twig_Loader_Filesystem("./views"),
            array( "cache" => "./views/cache" )
        );
    }

    public function process_page ($mainpage) {

        $twig = $this->load_twig();

        $tpl = $twig->load( $mainpage );

        echo $tpl->render( array("msg"=>"Hello, World!") );
    }
}