<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        
    }

    public function index(){
        $this->load->view('/frontend/home', $this->vars);
    }
}