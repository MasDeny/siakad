<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class C_sidang extends CI_Controller{
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form'));
        $this->load->helper(array('string'));
        $this->load->library('form_validation');
        $this->load->library('image_lib');
		// $this->load->model('m_datamahasiswa');
		// if($this->session->userdata('status') == ""){
		// 	redirect('login');
		// }
	}

	public function index(){
        $data['username'] = $this->session->userdata('username');
        $this->load->view('mahasiswa/v_sidang');
	}

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}