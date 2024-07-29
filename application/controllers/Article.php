<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_post');
    }

    public function index(){

        $this->load->view('/frontend/home', $this->vars);
    }

    public function detail($slug = null) {
        if(!is_null($slug)) {
            $this->vars['article'] = $this->m_post->getArticle(1,0,['slug' => $slug])->row();
            $this->load->view('/frontend/detail_article', $this->vars);
        } else {
            show_404();
        }
    }
}