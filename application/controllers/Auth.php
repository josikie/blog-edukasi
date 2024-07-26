<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

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

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		if($this->session->userdata('email')){
			if($this->session->userdata('role_id') == 1){
				redirect('admin');
			}else{
				redirect('user');
			}
		}

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run() == false){
			$this->load->view('admin/auth/login', $this->vars);
		}else{
			$this->_login();
		}
	}

	private function _login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		// get user by email
		$user = $this->db->get_where('users', ['email' => $email])->row_array();
		
		if($user){
			if(password_verify($password, $user['password'])){
				$data = [
					'email' => $user['email'],
					'role_id' => $user['role_id']
				];
				$this->session->set_userdata($data);
				if($user['role_id'] == 1){
					redirect('admin');
				}else{
					redirect('user');
				}
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password.</div>');
				redirect('auth');
			}

		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered.</div>');
			redirect('auth');
		}
	}

	public function registration(){
		if($this->session->userdata('email')){
			if($this->session->userdata('role_id') == 1){
				redirect('admin');
			}else{
				redirect('user');
			}
		}
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', 
			[
				'is_unique' => "Email has already registered!"
			]
		);
		$this->form_validation->set_rules('password1', 'Password', 
		'required|trim|min_length[4]|matches[password2]', [
			'matches' => "Password doesn't match",
			'min_length' => "Password too short"
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if($this->form_validation->run() == false){
			$this->load->view('admin/auth/register', $this->vars);
		} else{
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default_profile.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'date_created' => time()
			];

			// insert user
			$this->db->insert('users', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Account created. Please Login.</div>');
			redirect('auth');
		}
	}

	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Logged out!</div>');
		redirect('auth');
	}

	public function blocked(){
		$this->load->view('admin/blocked');
	}
}
