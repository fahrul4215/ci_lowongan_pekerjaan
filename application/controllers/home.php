<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	var $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('lowongan');
		$this->load->model('user');
		if ($this->uri->segment(2) == 'profilBaru') {
			return;
		}
		if ($this->session->userdata('masuk'))
		{
			$id = $this->session->userdata('masuk')['idUser'];
			$level = $this->session->userdata('masuk')['level'];
			$this->data = $this->user->getUser1($id, $level);
			if (empty($this->data) && $level != 1) {
				redirect('home/profilBaru/'.$level);
			}
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

	public function print()
	{
		$data['userMasuk'] = $this->data;
		$data['newLowongan'] = $this->lowongan->getNewLowongan();
		$data['numLowongan'] = $this->lowongan->getLowongan('num');
		$data['lowongan'] = $this->lowongan->getLowongan('');
		$data['kategori'] = $this->lowongan->getKategori();
		
		$this->load->library('pdf');
		$this->pdf->load_view('home/printLowongan', $data);
	}

	public function single($id)
	{
		$data['userMasuk'] = $this->data;
		$data['lowongan'] = $this->lowongan->getLowongan($id);
		$data['lowonganTerkait'] = $this->lowongan->getLowongan('', $id, $data['lowongan'][0]->fkKategori);
		$data['pendaftar'] = $this->lowongan->getPendaftar();
		$this->load->view('home/single', $data);
	}

	public function updatefoto(){
		$session_data = $this->session->userdata('masuk');
		$id = $session_data['idUser'];
		$config['upload_path']			='./assets/home/img/';
		$config['allowed_types']		='jpg|png';
		$config['max_width']			= 10240;
		$config['max_height']			= 7680;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if(!$this->upload->do_upload('gambar'))
		{
			$data['error'] = array('error' => $this->upload->display_errors());

		}else{

			$this->user->updatefotom($id);
			redirect('home/profil','refresh');
		}
	}

	public function profil()
	{
		$data['userMasuk'] = $this->data;
		$session_data = $this->session->userdata('masuk');
		$id = $session_data['idUser'];
		$level =  $session_data['level'];
		if($level==2){
			$data['user'] = $this->user->getUser($id);
			$this->load->view('home/profil_user', $data);
		}else if($level==3){
			$data['user'] = $this->user->getUser1($id, $level);
			$this->load->view('home/profil_perusahaan', $data);
		}
	}

	public function updatemember(){
		$session_data = $this->session->userdata('masuk');
		$id = $session_data['idUser'];
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('tanggalLahir', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('notelp', 'Nomor Telepon', 'trim|required');
		$this->form_validation->set_rules('agama', 'Agama', 'trim|required');
		$this->form_validation->set_rules('jkl', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');	
		if ($this->form_validation->run() == FALSE) {
			$this->form_validation->set_message('Update Profil', "Update Profil Gagal");
		} else {
			$this->user->updateUser($id);
			redirect('home/profil','refresh');
		}
	}

	public function apply($idLowongan, $idMember)
	{
		$lowongan = $this->lowongan->getLowongan($idLowongan);
		// $user = $this->user->getUser($idMember);
		// var_dump($user);
		// var_dump($lowongan);

		// foreach ($this->lowongan->getPendaftar() as $value) {
		// 	if ($value->idLowongan == $idLowongan && $value->idMember == $idMember) {
		// 		$this->session->set_flashdata('dahApplied', 'Anda Telah Terdaftar Lowongan '.$lowongan[0]->lowongan);
		// 		redirect('home');
		// 	}
		// }

		$kuotaBaru = $lowongan[0]->kuota - 1;
		$this->lowongan->apply($idLowongan, $idMember);
		$this->lowongan->updateKuotaLowongan($idLowongan, $kuotaBaru);
		$this->session->set_flashdata('applied', 'Anda Telah Berhasil Apply Pekerjaan '.$lowongan[0]->lowongan);
		redirect('home');
	}

	public function lowongan()
	{
		$data['userMasuk'] = $this->data;
		$this->load->view('home/myLowongan', $data);
	}

	public function getGridLowongan()
	{
		$data['userMasuk'] = $this->data;
		if (isset($data['userMasuk'][0]->idPerusahaan)) {
			$result = $this->lowongan->getLowongan('',0,0,$data['userMasuk'][0]->idPerusahaan);
		} else {
			$result = $this->lowongan->getLowongan('',0,0,$data['userMasuk'][0]->idMember);
		}

		foreach ($result as $value) {
			$value->tglPost = date('d-m-Y',strtotime($value->tglPost));
		}

		header("Content-Type: application/json");
		echo json_encode($result);
	}

	public function getGridKategori()
	{
		$result = $this->lowongan->getKategori(0);
		header("Content-Type: application/json");
		echo json_encode($result);
	}

	public function insertGridLowongan()
	{
		$data['userMasuk'] = $this->data;
		$this->lowongan->tambahLowongan($data['userMasuk'][0]->idPerusahaan);
	}

	public function updateGridLowongan()
	{
		$id = $this->input->post('idLowongan');
		$this->lowongan->updateLowongan($id);
	}

	public function deleteGridLowongan()
	{
		$id = $this->input->post('idLowongan');
		$this->lowongan->hapusLowongan($id);
	}

	public function profilBaru($level)
	{
		$data['level'] = $level;
		$data['jenisPerusahaan'] = $this->user->getJenisPerusahaan();
		if ($level == 2) {
			$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
			$this->form_validation->set_rules('tanggalLahir', 'Tanggal Lahir', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('notelp', 'Nomor Telepon', 'trim|required');
			$this->form_validation->set_rules('agama', 'Agama', 'trim|required');
			$this->form_validation->set_rules('jkl', 'Jenis Kelamin', 'trim|required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');	
		} elseif ($level == 3) {
			$this->form_validation->set_rules('namaPerusahaan', 'Nama', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('noTelp', 'Nomor Telepon', 'trim|required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');	
		}
		if ($this->form_validation->run() == FALSE) {
			$this->form_validation->set_message('Input Profil', "Input Profil Gagal");
		} else {
			if ($this->input->post('inputProfil')) {
				if ($level == 2) {
					$config['upload_path']		='./assets/home/img/member/';
				} elseif ($level == 3) {
					$config['upload_path']		='./assets/home/img/perusahaan/';					
				} else {
					$config['upload_path']		='./assets/home/img/';
				}
				$config['allowed_types']		='jpg|png';
				$config['max_width']			= 10240;
				$config['max_height']			= 7680;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if(!$this->upload->do_upload('gambar'))
				{
					$data['error'] = array('error' => $this->upload->display_errors());
				}else{
					$idUser = $this->session->userdata('masuk')['idUser'];
					if ($level == 2) {
						$this->user->insertMember($idUser);
					} elseif ($level == 3) {
						$this->user->insertPerusahaan($idUser);
					}
					redirect('home');
				}
			}
		}
		$this->load->view('home/profil_baru', $data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */