<?php
class Attraction extends CI_Model{
    
    public $id;
    public $name;
    
    public function __construct() {
        parent::__construct();
    }
    public function getAttractions(){
        $query = $this->db->get('attraction');
        return $query->result();
    }
    public function getAttraction($id){
        $this->db->where('aid', $id);
         return $query->result();
    }
}
