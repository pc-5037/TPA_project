<?php

class edit_guest extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('guest');
    }
    function show_detail_form(){
        $id = $this->uri->segment(3);
        $data['guest_list']  = $this->guest->getGuests();  
        $data['a_guest'] = $this->guesy->getGuest($id);
        $this->load->view('guest_edit_form',$data);
    }
    
    function edit(){
    $id= $this->input->post('gid');
    $data = array(
            'gname' => $this->input->post('gname'),
            'gmail' => $this->input->post('gmail'),
            'gtel' => $this->input->post('gtel')
        );
    $this->guest->editGuest($id,$data);
    redirect('/show_guest');

    }
    
}