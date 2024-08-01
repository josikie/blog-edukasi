<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_post');
    }

    public function index(){
        $this->vars['categories'] = $this->m_post->getCategories();
        $this->vars['trending_top'] = $this->m_post->getArticle(1,0,['approval' => 1])->row();

        $this->vars['trending_bottom'] = $this->m_post->getArticle(3,1,['approval' => 1])->result();
        $this->vars['trending_right'] = $this->m_post->getArticle(5,4,['approval' => 1])->result();
        $this->load->view('/frontend/home', $this->vars);
    }

    public function category($category_id = null) {
        $this->load->model('m_post');
    
        // Fetch categories
        $this->vars['categories'] = $this->m_post->getCategories();
    
        // Fetch posts based on selected category
        $where = ['approval' => 1];
        if ($category_id) {
            $where['posts.category_id'] = $category_id;
        }
        $this->vars['articles'] = $this->m_post->getArticle(10, 0, $where)->result();
        $this->load->view('frontend/category', $this->vars);
    }
    public function about() {
        $this->load->view('frontend/about', $this->vars);
    }
}