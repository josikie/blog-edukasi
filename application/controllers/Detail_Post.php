<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_Post extends MY_Controller
{
    public function __construct(){
		parent::__construct();
	}
    // post detail (per page)
    public function detail($id) {
        $data['post'] = $this->db->get_where('posts', ['id' => $id])->row_array();
        $data['comments'] = $this->db->get_where('comments', array('post_id' => $id))->result_array();
        $this->load->view('detail_post', $data);
    }
}
