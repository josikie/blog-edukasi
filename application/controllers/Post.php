<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        if(!$this->session->userdata('email')){
            redirect('auth');
        }
    }

    public function index(){
        $data['user'] = $this->db->get_where('users', ['email' 
        => $this->session->userdata('email')])->row_array();
        $data['role'] = "User";
        $this->load->view('/user/posts/list_post', $data);
    }

    // new posts
    public function add_post() {
        $data['user'] = $this->db->get_where('users', ['email' 
        => $this->session->userdata('email')])->row_array();
        $data['role'] = "User";
		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		$this->form_validation->set_rules('article', 'Article');

		if($this->form_validation->run() == false){
			$this->load->view('user/posts/add_post', $data);
		} else{
            $upload_image = $_FILES['image']['name'];
            $new_image = 'slides-3.jpg';
            if($upload_image){
                $config['upload_path'] = './assets/img/posts/';
                $config['allowed_types'] = 'gif|jpg|png|jpegfile|';
                $config['max_size']     = '2048';
                $this->load->library('upload', $config);
                if($this->upload->do_upload('image')){
                    $new_image = $this->upload->data('file_name');
                    // $this->db->set('image', $new_image);
                }else{
                    echo $this->upload->display_errors();
                }
            }
			$data = [
				'title' => htmlspecialchars($this->input->post('title', true)),
				'article' => htmlspecialchars($this->input->post('article', true)),
				'image' => $new_image,
				'date'  => date('Y-m-d'),
                'user_id' => $data['user']['id'],
                'approval' => 2,
                'category_id' => htmlspecialchars($this->input->post('category', true))
			];
			// insert user
			$this->db->insert('posts', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Article Created.</div>');
			redirect('post');
		}
    }

    //edit
    public function edit_post($id) {
        $data['user'] = $this->db->get_where('users', ['email' 
        => $this->session->userdata('email')])->row_array();
        $data['role'] = "User";
        $data['user']['posts'] = $this->db->get_where('posts', ['id' => $id])->row_array();
		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		$this->form_validation->set_rules('article', 'Article');

		if($this->form_validation->run() == false){
			$this->load->view('user/posts/edit_post', $data);
		} else{
            $upload_image = $_FILES['image']['name'];
            $new_image = 'default_profile.svg';
            if($upload_image){
                $config['upload_path'] = './assets/img/posts/';
                $config['allowed_types'] = 'gif|jpg|png|jpegfile|';
                $config['max_size']     = '2048';
                $this->load->library('upload', $config);
                if($this->upload->do_upload('image')){
                    $new_image = $this->upload->data('file_name');
                }else{
                    echo $this->upload->display_errors();
                }
            }
			$data = [
				'title' => htmlspecialchars($this->input->post('title', true)),
				'article' => htmlspecialchars($this->input->post('article', true)),
				'image' => $new_image,
				'date'  => date('Y-m-d'),
                'user_id' => $data['user']['id'],
                'approval' => $data['user']['posts']['approval'],
                'category_id' => htmlspecialchars($this->input->post('category', true))
			];
			// insert user
            $this->db->where('id', $id);
			$this->db->update('posts', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Article Updated.</div>');
			redirect('post');
		}
    }
    
    // Delete 
    function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('posts');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Article Deleted.</div>');
		redirect('post');
    }



}