<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class C_berkas extends CI_Controller{
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper(array('form'));
        $this->load->helper(array('string'));
        $this->load->library('form_validation');
        $this->load->library('image_lib');
        $this->load->model('M_datajudulberkas');
        
		// $this->load->model('m_datamahasiswa');
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
        $cek = $this->M_datajudulberkas->cek_datajudulberkas("berkasta",$where)->num_rows();
        if($cek > 0){
            $this->load->view('mahasiswa/header', $data);
            $this->load->view('mahasiswa/sidebar', $data);
            $this->load->view('mahasiswa/upload_berkas/v_upload', $data);
            $this->load->view('mahasiswa/footer', $data);
        }else{
            $data['mahasiswa'] = $this->M_datajudulberkas->view_by($NIM);
            $this->load->view('mahasiswa/header', $data);
            $this->load->view('mahasiswa/sidebar', $data);
            $this->load->view('mahasiswa/upload_berkas/v_upload', $data);
            $this->load->view('mahasiswa/footer', $data);
            //redirect(base_url("index.php/admin"));
        }
	}

  function multiple_upload(){
        $config['upload_path']   = './upload/'; 
        $config['allowed_types'] = 'pdf'; 
        $config['max_size']      = 99999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999; 
        $config['max_width']     = 99999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999; 
        $config['max_height']    = 99999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;  
        $this->load->library('upload', $config);

        $this->upload->do_upload('file1');
        $this->upload->do_upload('file2');
        $this->upload->do_upload('file3');
        $this->upload->do_upload('file4');
        $this->upload->do_upload('file5');
        $this->upload->do_upload('file6');
        $this->upload->do_upload('file7');
        $this->upload->do_upload('file8');
        $this->upload->do_upload('file9');
        $this->upload->do_upload('file10');
        $this->upload->do_upload('file11');
        $this->upload->do_upload('file12');
        $this->upload->do_upload('file13');
        $this->upload->do_upload('file14');
        $this->upload->do_upload('file15');
        $this->upload->do_upload('file16');
        $this->upload->do_upload('file17');
        $this->upload->do_upload('file18');
        $this->upload->do_upload('file19');
        $this->upload->do_upload('file20');
        redirect("mahasiswa/Index_mahasiswa","refresh");
  }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}