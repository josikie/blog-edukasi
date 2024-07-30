<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends MY_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

    // new posts
    public function add_comment() {

        $data['user'] = $this->db->get_where('users', ['email' 
        => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('comment', 'Comment', 'required|trim');
        
        $post_id = htmlspecialchars($this->input->post('post_id', true));

        $queryPost = $this->db->select('slug')->where('id', $post_id)->get('posts')->row();

        if($this->form_validation->run() == false){
			// $this->load->view('detail_post/', $data);
            redirect('article/'.$queryPost->slug);
		} else{
			$data = [
                'comment_date'  => date('Y-m-d'),
				'comment_body' => htmlspecialchars($this->input->post('comment', true)),
                'user_id' => $data['user']['id'],
                'post_id' => $post_id,
			];
			$this->db->insert('comments', $data);
			$this->session->set_flashdata('message', $this->db->error());
			// redirect('detail_post/detail/' . $post_id);
            redirect('article/'.$queryPost->slug);
		}
    }

    public function delete($id, $post_id = null){
        $this->db->where('id', $id);
        $this->db->delete('comments');
		// redirect('detail_post/detail/' . $post_id);
        echo "<script>history.back()</script>";
    }
}