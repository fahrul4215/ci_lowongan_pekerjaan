<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function login($username, $password)
	{
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));

		$query = $this->db->get();

		if ($query->num_rows()==1) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function daftar()
	{
		$object = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);
	}

}

/* End of file user.php */
/* Location: ./application/models/user.php */