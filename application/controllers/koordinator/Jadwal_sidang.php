<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jadwal_sidang extends CI_controller {
public function __construct() {
        parent::__construct();
        $this->load->model('M_jadwal_sidang');
        $this->load->database();
        $this->load->library('pagination');
        if ($this->session->userdata('status')=="") {
            redirect('karyawan_login');
        }
        $this->load->helper('text');
    }
    public function index() {
        $rows = $this->M_jadwal_sidang->counting();
        $config['base_url'] = base_url().'koordinator/Jadwal_sidang/index/';
        $config['total_rows'] = $rows;
        $config['per_page'] = 4;
        $config['uri_segment'] = 4;
        $start = $this->uri->segment(4);

        $this->pagination->initialize($config);
        
        $data = array(
            'title' => "Koordinator Panel System - Jadwal Sidang",
            'heading' => "Jadwal Sidang",
            'user' => $this->M_jadwal_sidang->get_data($config['per_page'], $start),
            'no' => $start,
            'pagination' => $this->pagination->create_links()
        );
        $this->load->view('koordinator/sidang/index', $data);
    }

    public function view($id = NULL) {
        $data['title'] = "Koordinator Panel System - Detail Jadwal ";
        $data['heading'] = "Detail Jadwal";
        $data['user_details'] = $this->M_jadwal_sidang->get_data_details($id);
        $data['dosen'] = $this->M_jadwal_sidang->show_dosen();   
        $this->load->view('koordinator/sidang/details', $data);
    }

    public function select_mhs($id)
    {
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('jam', 'jam', 'required');
        $this->form_validation->set_rules('ruangan', 'ruangan', 'required');

        if ($this->form_validation->run() == TRUE) {

            $this->M_jadwal_sidang->save_data($id);
            $this->M_jadwal_sidang->acc_sidang($id);
            redirect('koordinator/jadwal_sidang');
        }
        
    }

    public function list()
    {
        $rows = $this->M_jadwal_sidang->acc_counting();
        $config['base_url'] = base_url().'koordinator/Jadwal_sidang/list/';
        $config['total_rows'] = $rows;
        $config['per_page'] = 2;
        $config['uri_segment'] = 4;
        $start = $this->uri->segment(4);

        $this->pagination->initialize($config);
        
        $data = array(
            'title' => "Koordinator Panel System - List Mahasiswa yang telah di tentukan jadwalnya",
            'heading' => "List Detail Jadwal",
            'user_acc' => $this->M_jadwal_sidang->acc_mhs($config['per_page'], $start),
            'no' => $start,
            'pagination' => $this->pagination->create_links()
        );
        $this->load->view('koordinator/sidang/daftar', $data);
        
    }


    public function unselect_mhs($id)
    {
        $this->M_jadwal_sidang->delete_jadwal($id);
        redirect('koordinator/jadwal_sidang');
    }

    public function edit_jadwal($id)
    {
        
    }
}