<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pendaftar_senpro extends CI_controller {
public function __construct() {
        parent::__construct();
        $this->load->model('M_pendaftaran_senpro');
        $this->load->model('M_jadwal_sidang');
        $this->load->database();
        if ($this->session->userdata('status')=="") {
            redirect('karyawan_login');
        }
        $this->load->helper('text');
    }
    public function index() {
        $data['title'] = "Koordinator Panel System - Pendaftar Senpro";
        $data['heading'] = "Pendaftar_senpro";
        $data['user'] = $this->M_pendaftaran_senpro->get_data();
        $this->load->view('koordinator/Pendaftar_senpro/index', $data);
    }

     public function view($id = NULL) {
        $data['title'] = "Koordinator Panel System - Detail Jadwal ";
        $data['heading'] = "Detail Jadwal";
        $data['user_details'] = $this->M_pendaftaran_senpro->get_data($id);
        $data['dosen'] = $this->M_jadwal_sidang->show_dosen();
        $this->load->view('koordinator/Pendaftar_senpro/detail', $data);
    }

}