<?php

class show_guest extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('guest');
    }
    public function index()
    {
        $id = $this->uri->segment(3);
        $data['guest_list']  = $this->guest->getGuests();  
        $data['a_guest'] = $this->guest->getGuest($id);
        $this->load->view('guest_view', $data);
    }
}
