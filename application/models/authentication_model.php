<?php

class Authentication_model extends CI_Model {
	public function __construct() {
        $this->load->database();
    }

	public function register() {
		$data = array(
			'first_name' => htmlspecialchars(trim($this->input->post('firstname'), ENT_QUOTES)),
			'last_name' => htmlspecialchars(trim($this->input->post('lastname'), ENT_QUOTES)),
			'email' => htmlspecialchars(trim($this->input->post('email'), ENT_QUOTES)),
			'registration_date' =>  date("m/d/Y"),
			'password' => password_hash(trim($this->input->post('password')), PASSWORD_BCRYPT)
		);

		return $this->db->insert('users', $data);
	}

	public function verify_login() {
		$this->db->where('email', htmlspecialchars(trim($this->input->post('email'), ENT_QUOTES)));
		$this->db->select('email, password');
		$query = $this->db->get('users');
		$loginResult = $query->row_array();

		// set login session
		$loginSessionData = array(
	        'email'     => $loginResult['email'],
	        'logged_in' => TRUE
		);

		$this->session->set_userdata($loginSessionData);

		return password_verify($this->input->post('password'), $loginResult['password']);
	}

	public function is_email_exist($emailName) {
		$this->db->where('email', htmlspecialchars(trim($this->input->post($emailName), ENT_QUOTES)));
		$this->db->select('email');
		$query = $this->db->get('users');
		return $query->row_array();
	}
}