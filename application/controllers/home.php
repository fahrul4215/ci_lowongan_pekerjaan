<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('masuk')) {
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$this->load->view('home/index');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */