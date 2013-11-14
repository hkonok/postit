<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class fb_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        
    }
    public function insert_user_data($fb_id, $accesstoken, $name, $email, $last_login){
        $query = $this->db->where('fb_id', $fb_id)
                          ->get('user')
                          ->row_array();

        if(!isset($query['fb_id'])){
            $data = array('fb_id' => $fb_id,
                          'accesstoken' => $accesstoken,
                          'name' => $name,
                          'email' => $email,
                          'last_login' => $last_login
                        );
            $this->db->insert('user', $data);
        }
        else{
            $data = array(
                        'accesstoken' => $accesstoken,
                        'name' => $name,
                        'last_login' => $last_login
                    );
            $this->db->where('fb_id', $fb_id)
                     ->update('user', $data);
        }
    }
    
    public function get_user_data($fb_id){
        $data = $this->db->where('fb_id', $fb_id)
                         ->get('user')
                         ->row_array();
        return $data;
    }
    
    public function insert_status($fb_id, $status, $date, $time){
        $data = array('fb_id' => $fb_id,
                      'status' => $status,
                      'date_time' => $date." ".$time
                    );
        $this->db->insert('status', $data);
        return $this->db->insert_id();
    }
    
    public function get_status($fb_id){
        $data = $this->db->where('fb_id', $fb_id)
                         ->get('status')
                         ->result_array();
        
        return $data;
    }
    
    public function remove_status($fb_id, $status_id){
        $this->db->where('id', $status_id)
                 ->where('fb_id', $fb_id)
                 ->delete('status');
    }
    
    public function update_status($fb_id, $status_id, $status, $status_date, $status_time){
        $data = array(
                        'status' => $status,
                        'date_time' => $status_date." ".$status_time
                    );
        $this->db->where('id', $status_id)
                 ->where('fb_id', $fb_id)
                 ->update('status', $data);
    }
}


