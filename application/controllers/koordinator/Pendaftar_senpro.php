<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pendaftar_senpro extends CI_controller {
public function __construct() {
        parent::__construct();
        $this->load->model('M_pendaftaran_senpro');
        $this->load->model('M_jadwal_sidang');
        $this->load->library('pagination');
        $this->load->database();
        if ($this->session->userdata('status')=="") {
            redirect('karyawan_login');
        }
        $this->load->helper('text');
    }
    public function index() {
        $rows = $this->M_pendaftaran_senpro->counting();
        $config['base_url'] = base_url().'koordinator/pendaftar_senpro/index/';
        $config['total_rows'] = $rows;
        $config['per_page'] = 4;
        $config['uri_segment'] = 4;
        $start = $this->uri->segment(4);

        $this->pagination->initialize($config);
        
        $data = array(
            'title' => "Koordinator Panel System - Pendaftar Senpro",
            'heading' => "Pendaftar_senpro",
            'user' => $this->M_pendaftaran_senpro->get_data($config['per_page'], $start),
            'no' => $start,
            'pagination' => $this->pagination->create_links()
        );
        $this->load->view('koordinator/Pendaftar_senpro/index', $data);
        /*
        $data['title'] = ;
        $data['heading'] = ;
        $data['user'] = $this->M_pendaftaran_senpro->get_data();
        $this->load->view('koordinator/Pendaftar_senpro/index', $data);*/
    }

     public function view($id = NULL) {
        $data['title'] = "Koordinator Panel System - Detail Jadwal ";
        $data['heading'] = "Detail Jadwal";
        $data['user_details'] = $this->M_pendaftaran_senpro->get_data_detail($id);
        $data['dosen'] = $this->M_jadwal_sidang->show_dosen();
        $this->load->view('koordinator/Pendaftar_senpro/detail', $data);
    }

    public function save_mhs($id)
    {
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('jam', 'jam', 'required');
        $this->form_validation->set_rules('ruangan', 'ruangan', 'required');

        if ($this->form_validation->run() == TRUE) {

            $this->M_pendaftaran_senpro->save($id);
            $this->M_pendaftaran_senpro->acc($id);
            redirect('koordinator/pendaftar_senpro');
        }
        
    }
    public function daftar()
    {
        $rows = $this->M_pendaftaran_senpro->acc_counting();
        $config['base_url'] = base_url().'koordinator/Pendaftar_senpro/daftar/';
        $config['total_rows'] = $rows;
        $config['per_page'] = 2;
        $config['uri_segment'] = 4;
        $start = $this->uri->segment(4);

        $this->pagination->initialize($config);
        
        $data = array(
            'title' => "Koordinator Panel System - List Mahasiswa yang telah di tentukan jadwalnya",
            'heading' => "List Detail Jadwal",
            'user_acc' => $this->M_pendaftaran_senpro->acc_mhs($config['per_page'], $start),
            'no' => $start,
            'pagination' => $this->pagination->create_links()
        );
        $this->load->view('koordinator/Pendaftar_senpro/list_jadwal', $data);
        
    }
    public function unselect_mhs($id)
    {
        $this->M_pendaftaran_senpro->delete_jadwal($id);
        redirect('koordinator/pendaftar_senpro');
    }
}