<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
		if ($this->session->userdata('masuk')) {
			// redirect('welcome','refresh');
		}
	}

	public function index()
	{
		$this->load->view('viewLogin');
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
					'username' 	=> $value->username
				);
				$this->session->set_userdata('masuk', $session);
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
			$this->load->view('viewLogin');
		} else {
			redirect('welcome','refresh');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('masuk');
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */