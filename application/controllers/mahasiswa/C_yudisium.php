<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class C_yudisium extends CI_Controller{
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
        $NIM = $this->session->userdata("nama");
        $where = array(
            'mahasiswa_NIM' => $NIM
            );
        $cek = $this->m_datamahasiswa->cek_datastudytracer("yudisium",$where)->num_rows();
        if($cek > 0){
            $this->load->view('mahasiswa/header', $data);
            $this->load->view('mahasiswa/sidebar', $data);
            $this->load->view('mahasiswa/yudisium/v_terdaftar_yudisium');
            $this->load->view('mahasiswa/footer', $data);
        }else{
            $data['mahasiswa'] = $this->m_datamahasiswa->view_by($NIM);
            $this->load->view('mahasiswa/header', $data);
            $this->load->view('mahasiswa/sidebar', $data);
            $this->load->view('mahasiswa/yudisium/v_yudisium1',$data);
            $this->load->view('mahasiswa/footer', $data);
        }
	}

    
    public function cetak_pendaftaran_yudisium(){
            $data['NIM']=$_SESSION['nama'];
            $data['data_form_yudisium_mahasiswa'] = $this->m_datamahasiswa->select_data_form_yudisium_mahasiswa($data)->row();
            $this->load->view('mahasiswa/yudisium/v_cetak_yudisium', $data); //untuk menampilkan form edit mobil}
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}