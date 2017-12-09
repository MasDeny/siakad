<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jadwal_sidang extends CI_controller {
public function __construct() {
        parent::__construct();
        $this->load->model('M_jadwal_sidang');
        $this->load->database();
        if ($this->session->userdata('status')=="") {
            redirect('karyawan_login');
        }
        $this->load->helper('text');
    }
    public function index() {
        $data['title'] = "Koordinator Panel System - Jadwal Sidang";
        $data['heading'] = "Jadwal Sidang";
        $data['user'] = $this->M_jadwal_sidang->get_data();
        $data['user_acc'] = $this->M_jadwal_sidang->acc_mhs();
        $this->load->view('koordinator/sidang/index', $data);
    }

    public function view($id = NULL) {
        $data['title'] = "Koordinator Panel System - Detail Jadwal ";
        $data['heading'] = "Detail Jadwal";
        $data['user_details'] = $this->M_jadwal_sidang->get_data($id);
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


    public function view_acc($id = NULL)
    {
        $data['title'] = "Koordinator Panel System - Detail Jadwal ";
        $data['heading'] = "Detail Jadwal";
        $data['user_details'] = $this->M_jadwal_sidang->get_data($id);
        $data['dosen'] = $this->M_jadwal_sidang->show_dosen();   
        $this->load->view('koordinator/sidang/index', $data);
    }

    public function unselect_mhs($id)
    {
        
    }

    public function edit_jadwal($id)
    {
        
    }
}