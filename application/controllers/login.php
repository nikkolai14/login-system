<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
	 	parent::__construct();
	 	$this->load->helper('form');
	 	$this->load->library('form_validation');
	 	$this->load->model('Authentication_model');
	}

	public function index()	{	
		$this->page_data['errorMsg'] = ($this->session->flashdata('errorMsg') != NULL) ? $this->session->flashdata('errorMsg') : '' ;
		$this->load->view('login', $this->page_data);
	}

	public function verify_login() {
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'required|min_length[6]');

		if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errorMsg', 'Email/Password is required');
			redirect('login');
        } else {
    		$registerState = ($this->Authentication_model->verify_login()) ? true : false ;

    		if ($registerState) {
				redirect('admin_page');
    		} else {
				$this->session->set_flashdata('errorMsg', 'Email/Password is invalid');
    			redirect('login');
    		}            
        }
	}
}
