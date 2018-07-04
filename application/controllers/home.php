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
	
		$session_data = $this->session->userdata('masuk');
			$id = $session_data['idUser'];
			$level =  $session_data['level'];
		$data['user'] = $this->user->getUser($id);
		if($level==2){
		$this->load->view('home/profil_user', $data);
		}else if($level==3){
		$this->load->view('home/profil_perusahaan', $data);
		}
	}

	public function updatemember(){
		$session_data = $this->session->userdata('masuk');
			$id = $session_data['idUser'];
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('tanggalLahir', 'tanggalLahir', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('notelp', 'notelp', 'trim|required');
		$this->form_validation->set_rules('agama', 'agama', 'trim|required');
		$this->form_validation->set_rules('jkl', 'jkl', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamt', 'trim|required');	
		if ($this->form_validation->run() == FALSE) {
			$this->form_validation->set_message('Update Profil', "Update Profil Gagal");
		
		} else {
			$this->user->updateUser($id);
			redirect('home/profil','refresh');
		}
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */