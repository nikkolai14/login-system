<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_page extends CI_Controller {
	private $page_data = array();

	public function __construct() {
	 	parent::__construct();
	 	$this->load->model('user_model');
	}

	public function index()
	{	
		if ($this->check_login_session()) {
			// get user data
			$this->page_data['userData'] = $this->user_model->get_user_data($this->session->userdata('email'));

			$this->load->view('dashboard', $this->page_data);
		} else {
			redirect('login');
		}		
	}

	public function check_login_session() {
		return $this->session->userdata('logged_in');
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('login');
	}
}
