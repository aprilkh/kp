<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_mahasiswa');
        $this->load->model('M_agama');
		$this->load->model('M_pengaduan');
        $this->load->library('PHPExcel');

        $user = $this->session->userdata('userdata_desa');

        if ($this->session->userdata('userdata_desa') == null) {
            redirect('Login');
        }
	}

	public function index()
	{
		$data['judul'] 		= 'Keluhan mahasiswa >> Data mahasiswa';
		$data['aktif'] 		= 'mahasiswa';
		$data['mahasiswa']	= $this->M_mahasiswa->get_all()->result();
		$data['agama'] 		= $this->M_agama->get_all()->result();
		$this->load->view('mahasiswa/index', $data);
	}

    public function tambah_proses()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> NIK Tidak Boleh Kosong.</div>'
                    )
            );
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Nama Tidak Boleh Kosong.</div>'
                    )
            );
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Tempat Lahir Tidak Boleh Kosong.</div>'
                    )
            );
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Tanggal Lahir Tidak Boleh Kosong.</div>'
                    )
            );
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Jenis Kelamin Tidak Boleh Kosong.</div>'
                    )
            );
        $this->form_validation->set_rules('id_agama', 'Agama', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Agama Tidak Boleh Kosong.</div>'
                    )
            );

        //jika validasi gagal
        if ($this->form_validation->run() == FALSE) {
            $data['judul']      = 'Keluhan mahasiswa >> Data mahasiswa';
            $data['aktif']      = 'mahasiswa';
            $data['mahasiswa']   = $this->M_mahasiswa->get_all()->result();
            $data['agama']      = $this->M_agama->get_all()->result();
            $data['modal_show'] = "$('#modal-fade').modal('show');";
            $this->load->view('mahasiswa/index', $data);
        }else{
            $this->M_mahasiswa->tambah();
            $this->session->set_flashdata('sukses_tambah','1');
            redirect('mahasiswa');
        }
    }

    public function detail($nik)
    {
        $data['judul']      = 'Keluhan mahasiswa >> mahasiswa >> Detail';
        $data['aktif']      = 'mahasiswa';
        $data['mahasiswa']   = $this->M_mahasiswa->get_nik($nik)->row_array();
        $data['keluhan']    = $this->M_pengaduan->get_nik($nik)->num_rows();
        $this->load->view('mahasiswa/detail', $data);
    }

    public function edit($nik)
    {
        $data['judul']      = 'Keluhan mahasiswa >> Edit Data mahasiswa';
        $data['aktif']      = 'mahasiswa';
        $data['mahasiswa']  = $this->M_mahasiswa->get_nik($nik)->row_array();
        $data['agama']      = $this->M_agama->get_all()->result();
        $this->load->view('mahasiswa/edit', $data);
    }

    public function edit_proses($nik)
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> NIK Tidak Boleh Kosong.</div>'
                    )
            );
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Nama Tidak Boleh Kosong.</div>'
                    )
            );
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Tempat Lahir Tidak Boleh Kosong.</div>'
                    )
            );
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Tanggal Lahir Tidak Boleh Kosong.</div>'
                    )
            );
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Jenis Kelamin Tidak Boleh Kosong.</div>'
                    )
            );
        $this->form_validation->set_rules('id_agama', 'Agama', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Agama Tidak Boleh Kosong.</div>'
                    )
            );

        //jika validasi gagal
        if ($this->form_validation->run() == FALSE) {
            $data['judul']      = 'Keluhan mahasiswa >> Edit Data mahasiswa';
            $data['aktif']      = 'mahasiswa';
            $data['mahasiswa']   = $this->M_mahasiswa->get_nik($nik)->row_array();
            $data['agama']      = $this->M_agama->get_all()->result();
            $this->load->view('mahasiswa/edit', $data);
        }else{
            $this->M_mahasiswa->edit($nik);
            $this->session->set_flashdata('sukses_edit','1');
            redirect('mahasiswa');
        }
    }

    public function hapus($nik)
    {
        $this->db->where('nik', $nik);
        $this->db->delete('mahasiswa');
        
        $this->session->set_flashdata('sukses_hapus','1');
        redirect('mahasiswa');
    }
}

/* End of file mahasiswa.php */
/* Location: ./application/controllers/mahasiswa.php */ 