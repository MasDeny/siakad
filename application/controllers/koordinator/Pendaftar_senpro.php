<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pendaftar_senpro extends CI_controller {
public function __construct() {
        parent::__construct();
        if ($this->session->userdata('status')=="") {
            redirect('karyawan_login');
        }
        $this->load->helper('text');
    }
    public function index() {
        $data['title'] = "Koordinator Panel System - Pendaftar Senpro";
        $data['heading'] = "Pendaftar_senpro";
        $this->load->view('koordinator/Pendaftar_senpro/index', $data);
    }
}