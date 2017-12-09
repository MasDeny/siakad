<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class C_studytracer extends CI_Controller{
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form'));
        $this->load->helper(array('string'));
        $this->load->library('form_validation');
        $this->load->library('image_lib');
		$this->load->model('m_datamahasiswa');
		// if($this->session->userdata('status') == ""){
		// 	redirect('login');
		// }
	}

	public function index(){
        $data['username'] = $this->session->userdata('username');
        //$this->load->view('v_studytracer');
        $NIM = $this->session->userdata("nama");
        $where = array(
            'mahasiswa_NIM' => $NIM
            );
        $cek = $this->m_datamahasiswa->cek_datastudytracer("tracer_study",$where)->num_rows();
        if($cek > 0){
            $this->load->view('mahasiswa/header', $data);
            $this->load->view('mahasiswa/sidebar', $data);
            $this->load->view('mahasiswa/studytracer/v_terdaftar');
            $this->load->view('mahasiswa/footer', $data);
        }else{
            $data['mahasiswa'] = $this->m_datamahasiswa->view_by($NIM);
            $this->load->view('mahasiswa/header', $data);
            $this->load->view('mahasiswa/sidebar', $data);
            $this->load->view('mahasiswa/studytracer/v_studytracer',$data);
            $this->load->view('mahasiswa/footer', $data);
            //redirect(base_url("index.php/admin"));
        }
	}

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}