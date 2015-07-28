<?php

class LoginStack extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getloginUid($sid) {
        $this->db->select('*');
        $this->db->from('loginstack');
        $this->db->where('sta', $sid);
        $query = $this->db->get();
        $result = $query->last_row();
        return $result;
    }
    
//    public function loginByUid($sid) {
//        // Query to check whether username already exist or not
//        $condition = "user_name =" . "'" . $data['user_name'] . "'";
//        $this->db->select('*');
//        $this->db->from('guest');
//        $this->db->where($condition);
//        $this->db->limit(1);
//        $query = $this->db->get();
//            if ($query->num_rows() == 0) {
//            // Query to insert data in database
//                $this->db->insert('user_login', $data);
//                if ($this->db->affected_rows() > 0) {
//                    return true;
//            }
//            } else {
//            return false;
//            }
//    }
}