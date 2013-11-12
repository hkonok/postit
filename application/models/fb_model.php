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
}


