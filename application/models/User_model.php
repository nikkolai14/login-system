<?php

class User_model extends CI_Model {
	public function __construct() {
        $this->load->database();
    }

	public function get_user_data($email) {
		$this->db->where('email', $email);
		$this->db->select('*');
		$query = $this->db->get('users');
		return $query->row_array();
	}
}