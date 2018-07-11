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

		return $this->db->get()->result();
	}

	public function getLowongan($get, $getkat=0, $kategori=0, $idPerusahaan=0)
	{
		$this->db->join('perusahaan', 'lowongan.idPerusahaan = perusahaan.idPerusahaan', 'left');
		$this->db->join('kategori_pekerjaan kp', 'lowongan.fkKategori = kp.idKategori', 'left');
		$this->db->where('status', 'buka');
		$this->db->where('kuota >', 0);
		if ($get > 0) {
			$this->db->where('idLowongan', $get);
		}
		if ($kategori > 0) {
			$this->db->where('idLowongan !=', $getkat);
			$this->db->where('fkKategori', $kategori);
		}
		if ($idPerusahaan > 0) {
			$this->db->where('lowongan.idPerusahaan', $idPerusahaan);
		}
		$this->db->order_by('tglPost', 'desc');
		$query = $this->db->get('lowongan');

		if ($get == 'num') {
			return $query->num_rows();
		} else {
			return $query->result();
		}
	}

	public function getKategori($limit = 6)
	{
		return $this->db->get('kategori_pekerjaan', $limit)->result();
	}

	public function updateKuotaLowongan($idLowongan, $isiBaru)
	{
		$data = array(
			'kuota'	=> $isiBaru
		);

		$this->db->where('idLowongan', $idLowongan);
		$this->db->update('lowongan', $data);
	}

	public function apply($idLowongan, $idMember)
	{
		$data = array(
			'idMember'		=> $idMember,
			'idLowongan'	=> $idLowongan,
			'tglDaftar'		=> date('Y-m-d'),
			'status'		=> 'baru',
			'keterangan'	=> 'Belum di verifikasi'
		);

		$this->db->insert('pendaftar', $data);
	}

	public function getPendaftar()
	{
		return $this->db->get('pendaftar')->result();
	}

	public function getPendaftarLowongan($level, $id)
	{
		$this->db->from('pendaftar p');
		$this->db->join('lowongan l', 'p.idLowongan = l.idLowongan');
		if ($level == 'member') {
			$this->db->where('p.idMember', $id);			
		} elseif ($level == 'perusahaan') {
			$this->db->join('member m', 'p.idMember = m.idMember');
			$this->db->where('p.idLowongan', $id);
		} else {
			$this->db->where('p.idPendaftar', $id);
		}

		return $this->db->get()->result();
	}

	public function tambahLowongan($idPerusahaan)
	{
		$data = array(
			'lowongan' => $this->input->post('lowongan'),
			'deskripsi' => $this->input->post('deskripsi'),
			'persyaratan' => $this->input->post('persyaratan'),
			'idPerusahaan' => $idPerusahaan,
			'tglPost' => date('Y-m-d'),
			'status' => 'buka',
			'gaji' => $this->input->post('gaji'),
			'kota' => $this->input->post('kota'),
			'jamKerja' => $this->input->post('jamKerja'),
			'kuota' => $this->input->post('kuota'),
			'fkKategori' => $this->input->post('fkKategori'),
		);

		$this->db->insert('lowongan', $data);
	}

	public function updateLowongan($id)
	{
		$data = array(
			'lowongan' => $this->input->post('lowongan'),
			'deskripsi' => $this->input->post('deskripsi'),
			'persyaratan' => $this->input->post('persyaratan'),
			'gaji' => $this->input->post('gaji'),
			'kota' => $this->input->post('kota'),
			'jamKerja' => $this->input->post('jamKerja'),
			'kuota' => $this->input->post('kuota'),
			'fkKategori' => $this->input->post('fkKategori'),
		);

		$this->db->where('idLowongan', $id);
		$this->db->update('lowongan', $data);
	}

	public function hapusLowongan($id)
	{
		$this->db->where('idLowongan', $id);
		$this->db->delete('lowongan');
	}

	public function verifikasiPendaftar($idPendaftar)
	{
		$data = array('keterangan' => 'Terverifikasi');
		$this->db->where('idPendaftar', $idPendaftar);
		$this->db->update('pendaftar', $data);
	}

}

/* End of file lowongan.php */
/* Location: ./application/models/lowongan.php */