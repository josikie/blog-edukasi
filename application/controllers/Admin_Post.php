<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Post extends MY_Controller
{
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

    // approved
    public function approved($id){
        $data = [
            'approval' => 1
        ];
        $this->db->where('id', $id);
        $this->db->update('posts', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Updated.</div>');
        redirect('admin');
    }

    // rejected
    public function rejected($id){
        $data = [
            'approval' => 0
        ];
        $this->db->where('id', $id);
        $this->db->update('posts', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Updated.</div>');
        redirect('admin');
    }

    // page waiting for review
    public function waiting_for_review(){
        $data['user'] = $this->db->get_where('users', ['email' 
        => $this->session->userdata('email')])->row_array();
        $query = $this->db->get_where('posts', array('approval' => 2));
        $data['posts'] = $query->result_array();
        $this->load->view('/admin/waiting_for_review', $data);
    }
    // page approved
    public function approved_post(){
        $data['user'] = $this->db->get_where('users', ['email' 
        => $this->session->userdata('email')])->row_array();
        $query = $this->db->get_where('posts', array('approval' => 1));
        $data['posts'] = $query->result_array();
        $this->load->view('/admin/approved_post', $data);
    }
    // page rejected
    public function rejected_post(){
        $data['user'] = $this->db->get_where('users', ['email' 
        => $this->session->userdata('email')])->row_array();
        $query = $this->db->get_where('posts', array('approval' => 0));
        $data['posts'] = $query->result_array();
        $this->load->view('/admin/rejected_post', $data);
    }
}