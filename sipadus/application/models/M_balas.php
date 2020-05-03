<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_balas extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_all()
	{
		$q = $this->db->query("SELECT * FROM pengaduan, balas
								WHERE pengaduan.nik = balas.nik
								");	
		return $q;
	}

	public function get_nik($nik)
	{
		$q = $this->db->query("SELECT * FROM pengaduan, balas
								WHERE pengaduan.nik = balas.nik
								AND pengaduan.nik = '$nik'
								");	
		return $q;
	}

	public function get_id($id_pengaduan)
	{
		$q = $this->db->query("SELECT * FROM pengaduan, admin, balas
								WHERE balas.id_admin = pengaduan.id_admin
								AND balas.nik = pengaduan.nik
								AND balas.id_balas = '$id_balas' ");	
		return $q;
	}

	public function tambah($file)
	{
		$user 		= $this->session->userdata('userdata_desa');
		$nik 		= $user['nik'];
		$tanggal 	= date('d-m-Y');
		$balas  	= $this->input->post('balas');
		$status 	= 1;

		$data = array(
			/*'nik'    	=> $nik,
			'mahasiswa' => $mahasiswa,
            'tanggal'   => $tanggal,*/
			'balasan'	=> $balasan,
				);

		$this->db->insert('balas', $data);
	}

	/*public function edit_proses($id_pengaduan, $file)
	{
		$data = array(
			'pengaduan' => $this->input->post('pengaduan'),
			'file' => $file
		);

		$this->db->where('id_pengaduan', $id_pengaduan);
		$this->db->update('pengaduan', $data);
	}*/

}

/* End of file M_pengaduan.php */
/* Location: ./application/models/M_pengaduan.php */ 