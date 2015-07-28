<?php

class post_uid extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('RegisterData');
    }
    
    function postuid($id){
        $this->RegisterData->insertUid($id);
    }
    function postloginuid($id){
        $this->RegisterData->insertUid($id);
    }
}
