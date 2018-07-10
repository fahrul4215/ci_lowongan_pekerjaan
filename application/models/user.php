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

	public function getUser1($id, $level)
	{
		// if($level==2){
		// 	$this->db->select('idUser,username,password,idMember,namaMember,jenisKelamin');
		// }else if($level==3){

		// }
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

	public function getUser($id)
	{
		$this->db->select('*');
		$this->db->from('user as u');
		$this->db->join('member as m', 'm.fkUser = u.idUser','INNER');
		$this->db->where('u.idUser',$id);
		return $this->db->get()->result();
	}

	public function getJenisPerusahaan()
	{
		return $this->db->get('jenis_perusahaan')->result();
	}

	public function insertMember($idUser)
	{
		$file = $this->upload->data();
		$data = array(
			'namaMember' 	=> $this->input->post('nama'),
			'jenisKelamin' 	=> $this->input->post('jkl'),
			'tanggalLahir' 	=> $this->input->post('tanggalLahir'),
			'agama' 		=> $this->input->post('agama'),
			'alamat' 		=> $this->input->post('alamat'),
			'noTelp' 		=> $this->input->post('notelp'),
			'email' 		=> $this->input->post('email'),
			'fotoMember'	=> $file['file_name'],
			'fkUser'		=> $idUser
		);
		$this->db->insert('member', $data);
	}

	public function insertPerusahaan($idUser)
	{
		$file = $this->upload->data();
		$data = array(
			'namaPerusahaan' 	=> $this->input->post('namaPerusahaan'),
			'alamat' 			=> $this->input->post('alamat'),
			'noTelp' 			=> $this->input->post('noTelp'),
			'email' 			=> $this->input->post('email'),
			'website' 			=> $this->input->post('website'),
			'visi' 				=> $this->input->post('visi'),
			'misi' 				=> $this->input->post('misi'),
			'tahunBerdiri' 		=> $this->input->post('tahunBerdiri'),
			'idJenisPerusahaan' => $this->input->post('idJenisPerusahaan'),
			'fotoPerusahaan'	=> $file['file_name'],
			'fkUser'			=> $idUser
		);
		$this->db->insert('perusahaan', $data);
	}

	public function updatefotom($id){
		$file = $this->upload->data();
		$data = array('fotoMember' => $file['file_name']);
		$this->db->where('fkUser',$id);
		$this->db->update('member',$data);
	}

	public function updateUser($id){
		$data = array('namaMember' => $this->input->post('nama'),'alamat' => $this->input->post('alamat'),'tanggalLahir' => $this->input->post('tanggalLahir'),'agama' => $this->input->post('agama'),'noTelp' => $this->input->post('notelp'),'jenisKelamin' => $this->input->post('jkl'),'email' => $this->input->post('email'));
		$this->db->where('fkUser',$id);
		$this->db->update('member',$data);
	}

}

/* End of file user.php */
/* Location: ./application/models/user.php */