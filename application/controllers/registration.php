<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
	public function __construct() {
	 	parent::__construct();
	 	$this->load->helper('form');
	 	$this->load->library('form_validation');
	 	$this->load->model('Authentication_model');
	}

	public function index()
	{
		$this->load->view('registration');
	}

	public function register() {
		$this->form_validation->set_rules('firstname', 'First Name', 'required|min_length[2]');
		$this->form_validation->set_rules('lastname', 'lastname', 'required|min_length[2]');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email|callback_is_email_exist[email]');
		$this->form_validation->set_rules('password', 'password', 'required|min_length[6]');
		$this->form_validation->set_rules('confirmPassword', 'confirm password', 'required|matches[password]|min_length[6]');

		if ($this->form_validation->run() == FALSE) {
            $this->load->view('registration');
        } else {
    		$registerState = ($this->Authentication_model->register()) ? true : false ;

    		if ($registerState) {
				redirect('login');
    		} else {
    			redirect('registration');
    		}            
        }
	}

	public function is_email_exist($str, $fieldName) {
		// check email in records
		$email = $this->Authentication_model->is_email_exist($fieldName);
		$_POST['valid_email'] = htmlentities($email['email']);
		if ($str == htmlentities($email['email'])) {
            $this->form_validation->set_message('is_email_exist', 'This {field} is already been used.');
            return FALSE;
        } else {	
            return TRUE;
        }
	}
}
