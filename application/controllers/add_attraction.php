<?php

class add_attraction extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('attraction');
    }
    function index() {
        //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('dname', 'name', 'required|min_length[5]|max_length[30]');


        $this->form_validation->set_rules('desc', 'description', 'required|min_length[5]|max_length[300]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('attraction_form');
        } else {
        //Setting values for tabel columns
        $data = array(
        'aname' => $this->input->post('dname'),
        'description' => $this->input->post('desc'),
            );
        //Transfering data to Model
        $this->attraction->insertAttraction($data);
        $data['message'] = 'Add Successfully';
        //Loading View
        $this->load->view('attraction_form', $data);
        }
    }
}
