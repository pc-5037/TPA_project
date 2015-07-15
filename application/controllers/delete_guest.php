<?php

class delete_guest extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('guest');
    }
    
    function delete(){
        $id = $this->uri->segment(3);
        $this->guest->deleteGuest($id);
        $this->load->show_guest();
    }
}

