<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Blog extends CI_Controller {
    public function index()
    {
         $data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');
                $data['title'] = "My Real Title";
                $data['heading'] = "My Real Heading";


                $this->load->view('blogview', $data);
    }
    public function comment()
    {
        echo 'look at this';
    }
}
