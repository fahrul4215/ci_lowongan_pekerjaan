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

	public function daftar($level)
	{
		$object = array(
			'username'	=> $this->input->post('username'),
			'password'	=> md5($this->input->post('password')),
			'level'		=> $level
		);

		$this->db->insert('user', $object);
	}

	public function getUser($id, $level)
	{
		$this->db->from('user');
		if ($level == 2) {
			$this->db->join('member', 'user.idUser = member.fkUser');
		} else if ($level ==3) {
			$this->db->join('perusahaan', 'user.idUser = perusahaan.fkUser');
			$this->db->join('jenis_perusahaan', 'perusahaan.idJenisPerusahaan = jenis_perusahaan.idJenisPerusahaan');
		}
		$this->db->where('idUser', $id);

		return $this->db->get()->result();
	}

}

/* End of file user.php */
/* Location: ./application/models/user.php */