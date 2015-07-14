<?php

class show_attraction extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('attraction');
    }
    public function index()
    {
        $id = $this->uri->segment(3);
        $data['attraction_list']  = $this->attraction->getAttractions();  
        $data['an_attraction'] = $this->attraction->getAttraction($id);
        $this->load->view('attraction_view', $data);
    }
}

