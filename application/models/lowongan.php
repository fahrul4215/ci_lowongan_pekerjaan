<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lowongan extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function getNewLowongan()
	{
		$this->db->from('lowongan');
		$this->db->limit(5);
		$this->db->order_by('tglPost', 'desc');

		$query = $this->db->get();
		return $query->result();
	}

	public function getLowongan($get, $getkat = 0, $kategori = 0)
	{
		$this->db->join('perusahaan', 'lowongan.idPerusahaan = perusahaan.idPerusahaan', 'left');
		$this->db->where('status', 'buka');
		if ($get > 0) {
			$this->db->where('idLowongan', $get);
		}
		if ($kategori > 0) {
			$this->db->where('idLowongan !=', $getkat);
			$this->db->where('fkKategori', $kategori);
		}
		$query = $this->db->get('lowongan');

		if ($get == 'num') {
			return $query->num_rows();
		} else {
			return $query->result();
		}
	}

	public function getKategori()
	{
		$query = $this->db->get('kategori_pekerjaan', 6);
		return $query->result();
	}

}

/* End of file lowongan.php */
/* Location: ./application/models/lowongan.php */