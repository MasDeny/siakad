<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	
	public function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
    }
		 
	public function index(){
		$this->load->view('v_login');
	}
	
	function aksi_login(){
		$NIM = $this->input->post('NIM');
		$password = $this->input->post('password');
		$where = array(
			'NIM' => $NIM,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("login_mhs",$where)->num_rows();
		$NIK = $this->input->post('NIM');
		$passwordkaryawan = $this->input->post('password');
		$where = array(
			'NIK' => $NIK,
			'password' => $passwordkaryawan
			);
		$cek2 = $this->m_login->cek_login("login_karyawan",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $NIM,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);
			redirect(base_url("mahasiswa/Index_mahasiswa"));
		}else if($cek2 > 0){
			$data_session = array(
				'namakaryawan' => $NIK,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);
			redirect(base_url("index.php/panelkaryawan"));
		}else{
			echo "Username dan password salah !";
		}
	}

    public function logout() {
        $this->session->unset_userdata('nim');
        $this->session->unset_userdata('status');
        session_destroy();
        redirect('login');
        }
}
