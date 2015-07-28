<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class set_role extends CI_Controller {

        public function setadmin(){
            $session_name = $this->session->set_userdata('SESSION_NAME','admin');
                $this->load->view('staff_main');
        }
        public function settick(){
            $session_name = $this->session->set_userdata('SESSION_NAME','ticket_seller');
                $this->load->view('staff_main');
        }
        public function setstaff(){
            $session_name = $this->session->set_userdata('SESSION_NAME','staff');
                $this->load->view('staff_main');
        }
        public function station(){               
            $this->load->view('login_page');
        }
        public function setstanum(){
            $sid = $this->input->post('sid');
            $_SESSION["station"] = $sid;
            $this->load->view('login_page');
        }
}
