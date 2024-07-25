<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

    public function index(){
        $data['user'] = $this->db->get_where('users', ['email' 
        => $this->session->userdata('email')])->row_array();
        echo 'Selamat datang ' . $data['user']['name'];
    }
}