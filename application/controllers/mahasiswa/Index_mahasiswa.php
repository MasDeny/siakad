<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Index_mahasiswa extends CI_Controller{
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form'));
        $this->load->helper(array('string'));
        $this->load->library('form_validation');
        $this->load->library('image_lib');
		//$this->load->model('m_datamahasiswa');
		// if($this->session->userdata('status') == ""){
		// 	redirect('login');
		// }
	}

	public function index(){
        $data['username'] = $this->session->userdata('username');
        $this->load->view('mahasiswa/header', $data);
        $this->load->view('mahasiswa/sidebar', $data);
		$this->load->view('mahasiswa/index', $data);
        $this->load->view('mahasiswa/footer', $data);
	}

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}