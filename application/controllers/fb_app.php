<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class fb_app extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('facebook');
        $this->load->library('session');
    }

    public function index() {
        if($this->session->userdata('fb_id') != FALSE){
            redirect('fb_app/home/');
        }
        $this->load->view("region/header_home");
        $this->load->view("index");
        $this->load->view("region/footer");
    }

    public function test() {
        
        $footer_data['fb_id'] = $this->session->userdata('fb_id');
        $this->load->view('region/header');
        $this->load->view('test_pages');
        $this->load->view('region/footer', $footer_data);
    }
    
    private function get_pages(){
        $this->load->model('fb_model');
        $data = $this->fb_model->get_user_data($this->session->userdata('fb_id'));
        $args = array(
                'access_token' => $data['accesstoken'],
                'id' => $data['fb_id'],
                'fields' => 'accounts'
            );
       $accounts = $this->facebook->api("/", "get", $args);
       return $accounts;
    }

    function extend_token() {

        $access_token = $this->facebook->getAccessToken();
        $extended_at = "https://graph.facebook.com/oauth/access_token?" .
                "client_id=" . $this->facebook->getAppId() .
                "&client_secret=" . $this->facebook->getAppSecret() .
                "&grant_type=fb_exchange_token&fb_exchange_token=" . $access_token;
        $ex_at = file_get_contents($extended_at);
        $params = null;
        parse_str($ex_at, $params);
        $access_token = $params['access_token'];
        return $access_token;
    }

    function login_fb() {
        if($this->session->userdata('fb_id') != FALSE){
            redirect('fb_app/home/');
        }
        
        
        $param = $params = array(
            'scope' => 'user_about_me,email, read_insights, read_stream, publish_stream, manage_pages,read_mailbox'
        );
        $data['login_url'] = $this->facebook->getLoginUrl($param);
        $user = $this->facebook->getUser();
       // $my_var = $this->facebook->api('/me');

        if (!$user) {
            redirect($data['login_url']);
        } else {

            $access_token = $this->extend_token();

            if (!isset($access_token)) {
                redirect($data['login_url']);
            }

            $my_var = $this->facebook->api('/me');

            $args = array(
                'access_token' => $access_token
            );
            $permissions = $this->facebook->api("/".$my_var['id']."/permissions", "get", $args);

            if (
                    array_key_exists('user_about_me', $permissions['data'][0]) &&
                    array_key_exists('email', $permissions['data'][0]) &&
                    array_key_exists('read_insights', $permissions['data'][0]) &&
                    array_key_exists('read_stream', $permissions['data'][0]) &&
                    array_key_exists('publish_stream', $permissions['data'][0]) &&
                    array_key_exists('manage_pages', $permissions['data'][0]) &&
                    array_key_exists('read_mailbox', $permissions['data'][0])
            ) {

                

                $datetime = new DateTime; // current time = server time
                $otherTZ = new DateTimeZone('Asia/Dhaka');
                $datetime->setTimezone($otherTZ); // calculates with new TZ now
                $last_login = $datetime->format('Y-m-d H:i:s');

               $args = array(
                'access_token' => $access_token,
                 'email'
               );
               $email;
               $email = $this->facebook->api("/".$my_var['id'], "get", $args);
               if(!isset($email['email'])){
                   $email['email']="";
               }
             // var_dump($email['email']);
             //   echo $email['email'];
                $this->load->model('fb_model');
                $this->fb_model->insert_user_data($my_var['id'], $access_token, $my_var['name'], $email['email'], $last_login);
                
               
                $newdata = array(
                    'fb_id' => $my_var['id'],
                    'fb_name' => $my_var['name'],
                    'accesstoken' => $access_token
                );
                $this->session->set_userdata($newdata);
                redirect('fb_app/home/');
            } else {
                redirect($data['login_url']);
            }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        $this->facebook->destroySession();
        redirect('fb_app/');
    }

    public function home() {
        if($this->session->userdata('fb_id') == FALSE){
            redirect('fb_app/');
        }
        $data['fb_name'] = $this->session->userdata('fb_name');
        $data['fb_id'] = $this->session->userdata('fb_id');
        $data['accounts'] = $this->get_pages();
        $data['link'] = 1;
        
        $footer_data['fb_id'] = $data['fb_id'];
        
        $this->load->view("region/header", $data);
        
        $this->load->view("home", $data);
        $this->load->view("region/footer", $footer_data);
    }
    
    public function page_home($page_id) {
        if($this->session->userdata('fb_id') == FALSE){
            redirect('fb_app/');
        }
        
        $accounts = $this->get_pages();
        $judge = FALSE;
        $page_info = null;
        foreach($accounts['accounts']['data'] as $row){
            if($row['id'] == $page_id){
                $judge = TRUE;
                $page_info = $row;
                break;
            }
        }
        
        if($judge == FALSE){
            redirect('fb_app/home/');
        }
        
        $data['fb_name'] = $this->session->userdata('fb_name');
        if(isset($accounts))
            $data['accounts'] = $accounts;
        $data['page_info'] = $page_info;
        $data['link'] = 4;
        
        $this->load->view("region/header", $data);
        
        $data['side_nav_num'] = 1;
        $this->load->view('region/side_navbar', $data);
        $this->load->view("page_home", $data);
        
        $data_footer['fb_id'] = $page_id;
        $this->load->view("region/footer", $data_footer);
    }
    
    public function page_pictures($page_id){
        if($this->session->userdata('fb_id') == FALSE){
            redirect('fb_app/');
        }
        
        $accounts = $this->get_pages();
        $judge = FALSE;
        $page_info = null;
        foreach($accounts['accounts']['data'] as $row){
            if($row['id'] == $page_id){
                $judge = TRUE;
                $page_info = $row;
                break;
            }
        }
        
        if($judge == FALSE){
            redirect('fb_app/home/');
        }
        
        $data['fb_name'] = $this->session->userdata('fb_name');
        if(isset($accounts))
            $data['accounts'] = $accounts;
        $data['page_info'] = $page_info;
        $data['link'] = 4;
        
        $this->load->view("region/header", $data);
        
        $data['side_nav_num'] = 2;
        $this->load->view('region/side_navbar', $data);
        $this->load->view("page_pictures", $data);
        
        $data_footer['fb_id'] = $page_id;
        $this->load->view("region/footer", $data_footer);
    }
    
    public function page_status($page_id){
        if($this->session->userdata('fb_id') == FALSE){
            redirect('fb_app/');
        }
        
        $accounts = $this->get_pages();
        $judge = FALSE;
        $page_info = null;
        foreach($accounts['accounts']['data'] as $row){
            if($row['id'] == $page_id){
                $judge = TRUE;
                $page_info = $row;
                break;
            }
        }
        
        if($judge == FALSE){
            redirect('fb_app/home/');
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['fb_name'] = $this->session->userdata('fb_name');
        if(isset($accounts))
            $data['accounts'] = $accounts;
        $data['page_info'] = $page_info;
        $data['link'] = 4;
        
        $this->load->model('fb_model');
        $data['status_list'] = $this->fb_model->get_status($this->session->userdata('fb_id'));
        $footer_data['num_count'] = sizeof($data['status_list']);
        
        $this->load->view("region/header", $data);
        
        $data['side_nav_num'] = 3;
        $this->load->view('region/side_navbar', $data);
        $this->load->view("page_status", $data);
        
        
        $data_footer['fb_id'] = $page_id;
        $this->load->view("region/footer", $data_footer);
    }

    public function profile_pics() {
        if($this->session->userdata('fb_id') == FALSE){
            redirect('fb_app/');
        }
        
        $data['link'] = 2;
        
        $data['accounts'] = $this->get_pages();
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['accounts'] = $this->get_pages();
        $data['fb_name'] = $this->session->userdata('fb_name');
        $data['fb_id'] = $this->session->userdata('fb_id');
        
        $this->load->view("region/header", $data);
        $this->load->view("profile_pics", $data);
        $this->load->view("region/footer");
    }

    public function status_list($success = "failed") {
        if($this->session->userdata('fb_id') == FALSE){
            redirect('fb_app/');
        }
        
        $data['link'] = 3;
        $data['accounts'] = $this->get_pages();
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
        
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('status_date', 'Date', 'required');
        $this->form_validation->set_rules('status_time', 'Time', 'required');
        
        $this->load->model('fb_model');
        
        $data['fb_name'] = $this->session->userdata('fb_name');
        $data['fb_id'] = $this->session->userdata('fb_id');
        if ($this->form_validation->run() == FALSE){
            $this->load->view("region/header", $data);
            
            if($success == "success"){
                $data['success'] = TRUE;
            }
            $data['status_list'] = $this->fb_model->get_status($this->session->userdata('fb_id'));
            $footer_data['num_count'] = sizeof($data['status_list']);
            
            $this->load->view("status_list", $data);
            $this->load->view("region/footer", $footer_data);
        }
        else{
            
            
            $fb_id = $this->session->userdata('fb_id');
            $status = $this->input->post('status', TRUE);
            $date = $this->input->post('status_date', TRUE);
            $time = $this->input->post('status_time', TRUE);
            $this->fb_model->insert_status($fb_id, $status, $date, $time);
            
            redirect('fb_app/status_list/success/');
        }
    }
    
    public function remove_status($status_id){
        if($this->session->userdata('fb_id') == FALSE){
            redirect('fb_app/');
        }
        
        $this->load->model('fb_model');
        $this->fb_model->remove_status($this->session->userdata('fb_id'), $status_id);
        redirect('fb_app/status_list/');
    }
    
    public function update_status($status_id){
        if($this->session->userdata('fb_id') == FALSE){
            redirect('fb_app/');
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
        
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('status_date', 'Date', 'required');
        $this->form_validation->set_rules('status_time', 'Time', 'required');
        
        if ($this->form_validation->run() == TRUE){
            $this->load->model('fb_model');
            $status = $this->input->post('status', TRUE);
            $status_date = $this->input->post('status_date', TRUE);
            $status_time = $this->input->post('status_time', TRUE);
            $fb_id = $this->session->userdata('fb_id');
            
            $this->fb_model->update_status($fb_id, $status_id, $status, $status_date, $status_time);
        }
        
        redirect('fb_app/status_list/');
    }

}
