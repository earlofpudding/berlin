<?php

class main_controller extends master_controller {

    public function __construct() {

        $mainpage = 'index.twig';
        $config = parent::load_config();

        $config['siteinfo']['head_title'] = "test";

        $model = new main_model();
        $data = $model -> load_data( $config, 100 );

        parent::process_page( $mainpage, $config, $data );

    }



}