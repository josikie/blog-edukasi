<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('email')){
            redirect('auth');
        }else{
            if($this->session->userdata('role_id') == 1){
                redirect('auth/blocked');
            }
        }
    }
    
    public function index(){
        $data['user'] = $this->db->get_where('users', ['email' 
        => $this->session->userdata('email')])->row_array();
        $data['role'] = "User";

        $this->load->view('/user/dashboard', $data);
    }

    public function edit(){
        $data['user'] = $this->db->get_where('users', ['email' 
        => $this->session->userdata('email')])->row_array();
        $data['role'] = "User";

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if($this->form_validation->run() ==  false){
            $this->load->view('/user/edit_profile', $data);
        }else{
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // if there is image they want to upload
            $upload_image = $_FILES['image']['name'];

            if($upload_image){
                $config['upload_path'] = './assets/img/';
                $config['allowed_types'] = 'gif|jpg|png|jpegfile|';
                $config['max_size']     = '2048';
                $this->load->library('upload', $config);

                if($this->upload->do_upload('image')){
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                }else{
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('users');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile Updated.</div>');
            redirect('user');
        }
    }
    public function post(){
        $data['user'] = $this->db->get_where('users', ['email' 
        => $this->session->userdata('email')])->row_array();
        $data['role'] = "User";

        $this->load->view('/user/post', $data);
    }
}