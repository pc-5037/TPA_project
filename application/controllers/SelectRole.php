<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SelectRole extends CI_Controller{
    public function index()
	{
		$this->load->view('role_view');
	}
}
