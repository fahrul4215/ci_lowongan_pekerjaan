<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('lowongan');
		if (!$this->session->userdata('masuk')) {
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$data['newLowongan'] = $this->lowongan->getNewLowongan();
		$data['numLowongan'] = $this->lowongan->getLowongan('num');
		$data['lowongan'] = $this->lowongan->getLowongan('');
		$data['kategori'] = $this->lowongan->getKategori();
		$this->load->view('home/index', $data);
	}

	public function single($id)
	{
		$data['lowongan'] = $this->lowongan->getLowongan($id);
		$data['lowonganTerkait'] = $this->lowongan->getLowongan('', $id, $data['lowongan'][0]->fkKategori);
		$this->load->view('home/single', $data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */