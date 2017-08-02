<?php

class post_controller extends master_controller {

    public function __construct() {

        $mainpage = 'article.twig';

        $config = parent::prepare_config();

        $model = new post_model();
        $data = $model -> load_data( $config, 100 );
        $data = array();

        parent::process_page( $mainpage, $config, $data );

    }

}