<?php

class post_gate extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('guest');
    }
    
    function entergate($id){
        $this->guest->changeStatus($id,TRUE);
    }
    function exitgate($id){
        $this->guest->changeStatus($id,FALSE);
    }
    
}

