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
    public function insertAttr($data) {
        $this->db->insert('attraction', $data);
    }
}
