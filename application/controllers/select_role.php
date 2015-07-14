<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class select_role extends CI_Controller{
    public function index()
	{
		$this->load->view('role_view');
	}
}
