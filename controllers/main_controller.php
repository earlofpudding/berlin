<?php

class main_controller extends master_controller {

    public function __construct() {

        $mainpage = 'index.twig';

        $this->process_page($mainpage);
    }



}