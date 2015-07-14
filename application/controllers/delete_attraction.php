<?php

class delete_attraction extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('attraction');
    }
    
    function delete(){
        $id = $this->uri->segment(3);
        $this->attraction->deleteAttraction($id);
        $this->load->show_attraction();
    }
}