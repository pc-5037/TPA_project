<?php

class edit_attraction extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('attraction');
    }
    function show_detail_form(){
        $id = $this->uri->segment(3);
        $data['attraction_list']  = $this->attraction->getAttractions();  
        $data['an_attraction'] = $this->attraction->getAttraction($id);
        $this->load->view('attraction_edit_form',$data);
    }
    
    function edit(){
    $id= $this->input->post('did');
    $data = array(
            'aname' => $this->input->post('dname'),
            'description' => $this->input->post('desc'),
            'height_limit' => $this->input->post('hlimit')
        );
    $this->attraction->editAttraction($id,$data);
    redirect('/show_attraction');

    }
    
}
