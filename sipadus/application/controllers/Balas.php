<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Balas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_balas');
        $this->load->model('M_pengaduan');
        $this->load->library('PHPExcel');

        $user = $this->session->userdata('userdata_desa');

        if ($this->session->userdata('userdata_desa') == null) {
            redirect('Login');
        }
    }

    public function index()
    {
        $data['judul']      = 'Keluhan balas >> Data balas';
        $data['aktif']      = 'balas';
        $data['balas']      = $this->M_balas->get_all()->result();
        //$data['pengaduan']  = $this->M_pengaduan->get_all()->result();
        $this->load->view('balas/index', $data);
    }

    public function data()
    {
        $user = $this->session->userdata('userdata_desa');
        $data['judul']      = 'Keluhan balas >> Data balas';
        $data['aktif']      = 'data';
        $data['pengaduan'] = $this->M_balas->get_nik($user['nik'])->result();
        $this->load->view('balas/index', $data);
    }

    public function tambah()
    {
        $data['judul']      = 'Keluhan balas >> Data balas';
        $data['aktif']      = 'input';
        $this->load->view('balas/input', $data);
    }

    public function tambah_proses()
    {
        
        $this->form_validation->set_rules('balasan', 'Balasan', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Tanggal Lahir Tidak Boleh Kosong.</div>'
                    )
            );

        //jika validasi gagal
        if ($this->form_validation->run() == FALSE) {
            $data['judul']      = 'Keluhan balas >> Data balas';
            $data['aktif']      = 'input';
            $this->load->view('balas/input', $data);
        }else{
            $this->M_balas->tambah();
            $this->session->set_flashdata('sukses_tambah','1');
            redirect('balas/data');
        }
    }

    public function detail($id_balas)
    {
        $data['judul']      = 'Keluhan balas >> balas >> Detail';
        $data['aktif']      = 'data';
        $data['balas']      = $this->M_balas->get_nik($nik)->row_array();
        //$data['pengaduan']  = $this->M_pengaduan->get_nik($nik)->num_rows();
        $this->load->view('balas/detail', $data);
    }

    public function edit($id_balas)
    {
        $data['judul']      = 'Keluhan balas >> Edit Data balas';
        $data['aktif']      = 'data';
        $data['balas']      = $this->M_balas->get_id($id_balas)->row_array();
        //$data['pengaduan']  = $this->M_pengaduan->get_all()->result();
        $this->load->view('balas/edit', $data);
    }

    public function edit_proses($nik)
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> NIK Tidak Boleh Kosong.</div>'
                    )
            );
        $this->form_validation->set_rules('mahasiswa', 'Nama Mahasiswa', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Nama Tidak Boleh Kosong.</div>'
                    )
            );
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Tempat Lahir Tidak Boleh Kosong.</div>'
                    )
            );
        $this->form_validation->set_rules('balasan', 'Balasan', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Tanggal Lahir Tidak Boleh Kosong.</div>'
                    )
            );
        $this->form_validation->set_rules('id_admin', 'Admin', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Admin Tidak Boleh Kosong.</div>'
                    )
            );

        //jika validasi gagal
        if ($this->form_validation->run() == FALSE) {
            $data['judul']      = 'Keluhan balas >> Edit Data balas';
            $data['aktif']      = 'balas';
            $data['balas']      = $this->M_balas->get_nik($nik)->row_array();
            $data['pengaduan']  = $this->M_pengaduan->get_all()->result();
            $this->load->view('balas/edit', $data);
        }else{
            $this->M_balas->edit($nik);
            $this->session->set_flashdata('sukses_edit','1');
            redirect('balas');
        }
    }

    public function hapus($nik)
    {
        $this->db->where('nik', $nik);
        $this->db->delete('balas');
        
        $this->session->set_flashdata('sukses_hapus','1');
        redirect('balas');
    }
}

/* End of file balas.php */
/* Location: ./application/controllers/balas.php */ 