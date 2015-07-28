<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guest_log extends CI_Controller{
     function __construct() {
        parent::__construct();
        $this->load->model('loginstack');
    }
    
    function login(){
        $sid = $this->session->userdata('SESSION_NAME');
        $data['loginuid']= $this->loginstack->loginByUid($sid);
        
    }
}

