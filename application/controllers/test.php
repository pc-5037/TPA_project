<?php

class test extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->model('guest');
    }
    
    public function testgetguests(){
        $exp_re = array(
            'gid'=>'4',
            'guid'=>'00ee4535',
            'gname'=>'Faifai',
            'gmail'=>'fai@mail.com',
            'gtel'=>'123456789',
            'status'=>'0');
        $this->unit->run($this->guest->getGuest('4'),$exp_re,'getGuest');
        $this->load->view('test_view');
        
    }
       
}

