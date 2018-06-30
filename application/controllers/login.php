<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');

		if ($this->uri->segment(2) == 'logout') {
			return;
		}

		if ($this->session->userdata('masuk')) {
			redirect('home','refresh');
		}
	}

	public function index()
	{
		$this->load->view('login/viewLogin');
	}

	public function cekDb($password)
	{
		$username = $this->input->post('username');
		$result = $this->user->login($username, $password);
		if ($result) {
			$session = array();
			foreach ($result as $value) {
				$session = array(
					'idUser' 	=> $value->idUser,
					'username' 	=> $value->username,
					'level'		=> $value->level
				);
				$this->session->set_userdata('masuk', $session);
				$this->session->set_flashdata('dahMasuk', 'Berhasil Login');
			}
			return true;
		} else {
			$this->form_validation->set_message('cekDb', 'Login Gagal');
			return false;
		}
	}

	public function cekLogin()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login/viewLogin');
		} else {
			redirect('home','refresh');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('masuk');
		// $this->session->sess_destroy();
		$this->session->set_flashdata('dahKeluar', 'Anda Telah Logout');
		redirect('login');
	}

	public function daftar($level)
	{
		$this->load->view('login/viewDaftar');
	}

	public function create($level)
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]',
			array(
				'required' 		=> 'kolom %s tidak boleh kosong!!!!!!!',
				'is_unique'		=> 'isi dari kolom %s sudah ada'
			));
		$this->form_validation->set_rules('password', 'Password', 'trim|required',
			array(
				'required' 		=> 'kolom %s tidak boleh kosong!!!!!!!',
			));
		$this->form_validation->set_rules('konfirmasiPassword', 'Konfirmasi Password', 'trim|required|matches[password]',
			array(
				'required' 		=> 'kolom %s tidak boleh kosong!!!!!!!',
				'matches'		=> '%s tidak sesuai'
			));
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login/viewDaftar');
		} else {
			$this->user->daftar($level);
			redirect('login','refresh');
		}
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */