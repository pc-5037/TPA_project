<?php

class add_guest extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('guest');
    }
    function index() {
        //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('dname', 'Username', 'required|min_length[5]|max_length[15]');

        //Validating Email Field
        $this->form_validation->set_rules('demail', 'Email', 'required|valid_email');

        //Validating Mobile no. Field
        $this->form_validation->set_rules('dmobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('guest_form');
        } else {
            //Setting values for tabel columns
            $data = array(
                'game' => $this->input->post('gname'),
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
