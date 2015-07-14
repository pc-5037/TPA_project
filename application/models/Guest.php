<?php

class Guest extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getGuests(){
        $query = $this->db->get('guest');
        return $query->result();
    }
    
    public function getGuest($data){
        $this->db->select('*');
        $this->db->from('guest');
        $this->db->where('gid', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
    public function insertGuest($data) {
        $this->db->insert('guest', $data);
    }
    
    function editGuest($id,$data){
        $this->db->where('gid', $id);
        $this->db->update('guest', $data);
    }
    
    function deleteGuest($id){
        $this->db->where('gid', $id);
        $this->db->delete('guest');
    }
}