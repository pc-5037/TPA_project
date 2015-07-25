<?php
class RegisterData extends CI_Model{
    
    
    public function __construct() {
        parent::__construct();
    }
    
    public function insertUid($uid){
        $data = array('uid' => $uid);
        $this->db->insert('getuid',$data);
    }
    
    public function getLastInserted() {
        $this->db->select('uid');
        $this->db->from('getuid');
        $this->db->where('id',$this->db->insert_id());
        return $this->db->get()->row()->uid;
    }
}