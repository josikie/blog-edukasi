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
        $this->load->model('m_users');
    }
    public function index(){
        $data['user'] = $this->db->get_where('users', ['email' 
        => $this->session->userdata('email')])->row_array();
        $data['role'] = "Admin";
        $this->load->view('/admin/dashboard', $data);
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
                    $old_image = $data['user']['image'];
                    if($old_image != 'default_profile.svg'){
                        unlink(FCPATH . 'assets/img/' . $old_image);
                    }
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
            redirect('admin');
        }
    }

    public function users() {
        $this->vars['user'] = $this->db->get_where('users', ['email' 
        => $this->session->userdata('email')])->row_array();
        $this->vars['role'] = "Admin";
        $this->vars['users'] = $this->m_users->all()->result();

        $this->load->view('/user/list_user', $this->vars);
    }
}