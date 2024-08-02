<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model(['m_post','m_categories']);
    }

    public function index(){

        $config = array();
        $config["base_url"] = base_url() . "articles/index/";
        $config["total_rows"] = $this->m_post->get_count(); // Get the total number of records
        $config["per_page"] = 5; // Number of items per page
        $config["uri_segment"] = 3; // The segment in the URL that indicates the page number

        // Bootstrap pagination style
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '<i class="ti-angle-left"></i>';
        $config['last_link'] = '<i class="ti-angle-right"></i>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '<i class="ti-angle-left"></i>';
        $config['prev_tag_open'] = '<li class="prev page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '<i class="ti-angle-right"></i>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3) ?? 0);
        $this->vars["posts"] = $this->m_post->fetch_data($config["per_page"], $page);
        $this->vars["links"] = $this->pagination->create_links();

        // List Category
        $this->vars['categories'] = $this->m_categories->all()->result();
        // Recent Post
        $this->vars['recent_posts'] = $this->m_post->getRecentPost()->result();

        $this->load->view('/frontend/article', $this->vars);
    }

    public function detail($slug = null) {
        if(!is_null($slug)) {
            $article = $this->m_post->getArticle(1,0,['slug' => $slug])->row();

            // Add viewer
            $this->m_post->updateViewer($article->id);

            // Posts
            $this->vars['post'] = $article;
            $this->vars['post']->author = $this->db->get_where('users',['id' => $article->user_id])->row();
            $this->vars['post']->count_comments = $this->db->select('COUNT(*) as jumlah')->where('post_id', $article->id)->get('comments')->row('jumlah');
            $this->vars['post']->comments = $this->m_post->getComments($article->id)->result();
            $this->vars['prev_post'] = $this->m_post->getPrevArticle($article->id)->row();
            $this->vars['next_post'] = $this->m_post->getNextArticle($article->id)->row();

            // List Category
            $this->vars['categories'] = $this->m_categories->all()->result();

            // Recent Post
            $this->vars['recent_posts'] = $this->m_post->getRecentPost()->result();

            $this->load->view('/frontend/detail_article', $this->vars);
        } else {
            show_404();
        }
    }
}