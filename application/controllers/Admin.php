<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('email')){
            redirect('auth');
        }else{
            if($this->session->userdata('role_id') == 2){
                redirect('auth/blocked');
            }
        }
    }
    public function index(){
        $data['user'] = $this->db->get_where('users', ['email' 
        => $this->session->userdata('email')])->row_array();
        $data['role'] = "Admin";
        $this->load->view('/admin/dashboard', $data);
    }
}