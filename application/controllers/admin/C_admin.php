<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_admin extends CI_controller {
public function __construct() {
        parent::__construct();
        if ($this->session->userdata('status')=="") {
            redirect('karyawan_login');
        }
        $this->load->helper('text');
    }
    public function index() {
        $data['username'] = $this->session->userdata('username');
        $this->load->view('administrasi/index', $data);
    }
}