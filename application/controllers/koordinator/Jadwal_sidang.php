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
        $this->load->view('koordinator/sidang/index', $data);
    }
}