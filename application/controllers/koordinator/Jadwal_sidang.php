<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jadwal_sidang extends CI_controller {
public function __construct() {
        parent::__construct();
        if ($this->session->userdata('status')=="") {
            redirect('karyawan_login');
        }
        $this->load->helper('text');
    }
    public function index() {
        $data['title'] = "Koordinator Panel System - Jadwal Sidang";
        $data['heading'] = "Jadwal Sidang";
        $this->load->view('koordinator/sidang/index', $data);
    }
}