<?php

class add_guest extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('guest');
        $this->load->model('registerdata');
    }
    function index() {
        //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('gname', 'Username', 'required|min_length[5]|max_length[15]');

        //Validating Email Field
        $this->form_validation->set_rules('gemail', 'Email', 'required|valid_email');

        //Validating Mobile no. Field
        $this->form_validation->set_rules('gmobile', 'Mobile No.', 'required|regex_match[/^[0-9().-]+$/]');
//'required|regex_match[/^[0-9]{10}$/]'    
        $data['uid']= $this->registerdata->getLastInserted();
        if ($this->form_validation->run() == FALSE) {
           
            $this->load->view('guest_form',$data);
        } else {
            //Setting values for tabel columns
            $data = array(
                'guid' => $this->input->post('uid'),
                'gname' => $this->input->post('gname'),
                'gmail' => $this->input->post('gemail'),
                'gtel' => $this->input->post('gmobile')
            );
            //Transfering data to Model
            $this->guest->insertGuest($data);
            $data['message'] = 'Data Inserted Successfully';
            //Loading View
            $this->load->view('guest_form', $data);
}
    }
}
