<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Addpost extends MY_Controller
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
        $this->load->view('admin/forms-editors', $this->vars);
    }
}
