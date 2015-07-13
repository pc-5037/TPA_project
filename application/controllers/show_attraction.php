<?php

class show_attraction extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('attraction');
    }
    public function index()
    {
         $data['attraction_list']  = $this->attraction->getAttractions();        
         $this->load->view('attraction_view', $data);
    }
}

