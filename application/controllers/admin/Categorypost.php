<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categorypost extends MY_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index()
    {
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
        
        $res['status'] = true;
        $res['content'] = $this->load->view('admin/category-post/form', $this->vars, true);

        header('Content-Type: application/json');
        echo json_encode($res);
    }
}
