<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	var $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('lowongan');
		$this->load->model('user');
		if ($this->session->userdata('masuk')) {
			$id = $this->session->userdata('masuk')['idUser'];
			$level = $this->session->userdata('masuk')['level'];
			$this->data = $this->user->getUser($id, $level);
		}
	}

	public function index()
	{
		$data['userMasuk'] = $this->data;
		$data['newLowongan'] = $this->lowongan->getNewLowongan();
		$data['numLowongan'] = $this->lowongan->getLowongan('num');
		$data['lowongan'] = $this->lowongan->getLowongan('');
		$data['kategori'] = $this->lowongan->getKategori();
		$this->load->view('home/index', $data);
	}

	public function single($id)
	{
		$data['userMasuk'] = $this->data;
		$data['lowongan'] = $this->lowongan->getLowongan($id);
		$data['lowonganTerkait'] = $this->lowongan->getLowongan('', $id, $data['lowongan'][0]->fkKategori);
		$this->load->view('home/single', $data);
	}

	public function profil()
	{
		// if (!$this->session->userdata('masuk')) {
			// red
		// }
		$data['userMasuk'] = $this->data;
		$data['user'] = $this->data;
		$this->load->view('home/profil', $data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */