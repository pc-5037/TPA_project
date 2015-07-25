<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {

	public function index()
	{		
                $this->load->view('welcome_message');
	}
        public function setAdmin(){
            $session_name = $this->session->set_userdata('SESSION_NAME','admin');
                $this->load->view('welcome_message');
        }
        public function setTick(){
            $session_name = $this->session->set_userdata('SESSION_NAME','ticket_seller');
                $this->load->view('welcome_message');
        }
        public function setStaff(){
            $session_name = $this->session->set_userdata('SESSION_NAME','staff');
                $this->load->view('welcome_message');
        }
}
