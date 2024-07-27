<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categorypost extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('email')){
            redirect('auth');
        }else{
            if($this->session->userdata('role_id') == 2){
                redirect('auth/blocked');
            }
            
            $this->vars['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $this->vars['role'] = "Admin";
        }

        $this->load->model('m_categories');
    }
    
    public function index()
    {
        $this->vars['categories'] = $this->m_categories->all()->result();
        $this->load->view('admin/category-post/list-category-post', $this->vars);
    }

    public function create() {
        $this->vars['crudmode'] = 'create';

        $res['status'] = true;
        $res['content'] = $this->load->view('admin/category-post/form', $this->vars, true);

        header('Content-Type: application/json');
        echo json_encode($res);
    }

    public function edit() {
        $this->vars['crudmode'] = 'update';

        $id = $this->input->post('id');
        $this->vars['category'] = $this->db->get_where('category', ['id' => $id])->row();
        
        $res['status'] = true;
        $res['content'] = $this->load->view('admin/category-post/form', $this->vars, true);

        header('Content-Type: application/json');
        echo json_encode($res);
    }

    public function save() {

        $id = $this->input->post('id');
        $category = $this->db->get_where('category', ['id' => $id])->row();
        $store['name'] = $this->input->post('name', true);

        $message = '';

        if(!empty($category)) {
            $this->m_categories->update($id, $store);
            $message = 'Category updated.';
        } else {
            $message = 'New category added.';
            $this->m_categories->insert($id, $store);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">'.$message.'</div>');

        redirect('manage/categorypost');
    }

    public function delete() {
        $id = $this->input->post('id');
        $this->m_categories->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Category Deleted.</div>');

        $res['status'] = true;
        header('Content-Type: application/json');
        echo json_encode($res);
    }
}
