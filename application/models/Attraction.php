<?php
class Attraction extends CI_Model{
    
    public $id;
    public $name;
    public $descp;


    public function __construct() {
        parent::__construct();
    }
    
    public function getAttractions(){
        $query = $this->db->get('attraction');
        return $query->result();
    }
    
    public function getAttraction($data){
        $this->db->select('*');
        $this->db->from('attraction');
        $this->db->where('aid', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
    public function insertAttraction($data) {
        $this->db->insert('attraction', $data);
    }
    
    function editAttraction($id,$data){
        $this->db->where('aid', $id);
        $this->db->update('attraction', $data);
    }
    
    function deleteAttraction($id){
        $this->db->where('aid', $id);
        $this->db->delete('attraction');
    }
}
