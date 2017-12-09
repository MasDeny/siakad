<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_sempro extends CI_Controller {
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper(array('form'));
        $this->load->helper(array('string'));
        $this->load->library('form_validation');
        $this->load->library('image_lib');
		$this->load->model('m_upload');
		$this->load->model('m_modelcrud');
	}
	

	function index(){
        $nim =  $this->session->userdata("nama");
        $data['username'] = $this->session->userdata('username');
		$this->load->view('mahasiswa/header', $data);
        $this->load->view('mahasiswa/sidebar', $data);
		$this->load->view('mahasiswa/daftar_sempro/v_upload_file');
		$this->load->view('mahasiswa/footer', $data);
	}
	
	function load_yudisium2(){
        $nim =  $this->session->userdata("nama");
        $data['username'] = $this->session->userdata('username');
		$this->load->view('mahasiswa/header', $data);
        $this->load->view('mahasiswa/sidebar', $data);
		$this->load->view('mahasiswa/daftar_sempro/v_upload_file');
		$this->load->view('mahasiswa/footer', $data);
	}
	
	
	public function savepkl($upload){
		$id_pkl=$this->m_upload->getkode_pkl();
		$data_session = array(
				'iddokumen_kelengkapan_senpro' => $iddokumen_kelengkapan_senpro	
				);
		$this->session->set_userdata($data_session);
	$data = array(
	'iddokumen_kelengkapan_senpro' => $kode,
			'proposal_TA' => $this->input->post('proposal_TA'),
			'kartu_kendali' => $this->input->post('kartu_kendali'),
			'kk_senpro_lalu' => $this->input->post('kk_senpro_lalu'),
			'makalah' => $this->input->post('makalah'),
			'lembar_berita_acara' => $this->input->post('lembar_berita_acara'),
			'lembar_pengusulan' => $this->input->post('lembar_pengusulan'),
			'lembar_revisi' => $this->input->post('lembar_revisi'),
			'lembar_hasil_senpro' => $this->input->post('lembar_hasil_senpro'),
			'lembar_daftar_hadir' => $this->input->post('lembar_daftar_hadir'),
			'lembar_pengesahan' => $this->input->post('lembar_pengesahan'),
			'kartu_kontrakDP' => $this->input->post('kartu_kontrakDP')
	
	//'idStatus_Sempro'=>$kode,
	//'Jadwal_idJadwal'=>0,
	//'login_karyawan_id_karyawan'=>0,
	//'mahasiswa_NIM'=>$this->input->post('nim'),
	//'dokumen_kelengkapan_senpro_iddokumen_kelengkapan_senpro'=>0
	);

	
	$this->m_modelcrud->simpandokumen_kelengkapan_senpro($data);
	//echo implode("<br>",$data);
	//echo $ipsmt3;
	redirect('yudisium/load_yudisium2');
	}
	
	function multiple_upload(){
	$config['upload_path'] 		= './upload/';
	$config['allowed_types'] 	= 'pdf';
	$config['max_size'] 		= 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
	$config['max_width']		= 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
	$config['max_height']		= 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
	$this->load->library('upload',$config);

	$this->upload->do_upload('file_1');
	 $file_1 = $this->upload->data();
        echo "<pre>";
        print_r($file_1);
        echo "</pre>";
        
        // script uplaod file kedua
        $this->upload->do_upload('file_2');
        $file_2 = $this->upload->data();
        echo "<pre>";
        print_r($file_2);
        echo "</pre>";

        // script upload file ketiga
        $this->upload->do_upload('file_3');
        $file_3 = $this->upload->data();
        echo "<pre>";
        print_r($file_3);
        echo "</pre>";
        
        // script uplaod file keempat
        $this->upload->do_upload('file_4');
        $file_4 = $this->upload->data();
        echo "<pre>";
        print_r($file_4);
        echo "</pre>";

        // script upload file kelima
        $this->upload->do_upload('file_5');
        $file_5 = $this->upload->data();
        echo "<pre>";
        print_r($file_5);
        echo "</pre>";
        
        // script uplaod file keenam
        $this->upload->do_upload('file_6');
        $file_6 = $this->upload->data();
        echo "<pre>";
        print_r($file_6);
        echo "</pre>";

        // script upload file ketujuh
        $this->upload->do_upload('file_7');
        $file_7 = $this->upload->data();
        echo "<pre>";
        print_r($file_7);
        echo "</pre>";
        
        // script uplaod file kedelapan
        $this->upload->do_upload('file_8');
        $file_8 = $this->upload->data();
        echo "<pre>";
        print_r($file_8);
        echo "</pre>";

        // script upload file kesembilan
        $this->upload->do_upload('file_9');
        $file_9 = $this->upload->data();
        echo "<pre>";
        print_r($file_9);
        echo "</pre>";
        
        // script uplaod file kesepuluh
        $this->upload->do_upload('file_10');
        $file_10 = $this->upload->data();
        echo "<pre>";
        print_r($file_10);
        echo "</pre>";

        // script upload file kesebelas
        $this->upload->do_upload('file_11');
        $file_11 = $this->upload->data();
        echo "<pre>";
        print_r($file_11);
        echo "</pre>";}

        public function logout() {
        $this->session->sess_destroy();
        redirect('login');}
        
	/*public function tambahdata_khs1()
	{
		$data = array();
		if($this->input->post('submitkhs1'))
		{
			/*
			$upload = $this->m_upload->upload();
			if($upload['result'] == "success")
			{ 
				//$this->m_upload->savekhs($upload);
				//redirect('yudisium/load_yudisium3'); 
			}
			else
			{ 
				//$data['message'] = $upload['error'];
			}
			
		}
		//$this->load->view('v_yudisium2', $data);
	}*/
	
	/*public function editdata_khs1(){
		$data = array();
		if($this->input->post('submitkhs2')){ 
			$upload = $this->m_upload->upload();
			if($upload['result'] == "success"){ 
				$this->m_upload->editkhs($upload);
				redirect('yudisium/load_yudisium4');
			}else{ 
				$data['message'] = $upload['error'];
			}
		}
		$this->load->view('v_yudisium3', $data);
	}
	
	public function editdata_khs2(){
		$data = array();
		if($this->input->post('submitkhs3')){ 
			$upload = $this->m_upload->upload();
			if($upload['result'] == "success"){ 
				$this->m_upload->editkhs1($upload);
				redirect('yudisium/load_yudisium5');
			}else{ 
				$data['message'] = $upload['error'];
			}
		}
		$this->load->view('v_yudisium4', $data);
	}
	
	public function editdata_khs3(){
		$data = array();
		if($this->input->post('submitkhs4')){ 
			$upload = $this->m_upload->upload();
			if($upload['result'] == "success"){ 
				$this->m_upload->editkhs2($upload);
				redirect('yudisium/load_yudisium6');
			}else{ 
				$data['message'] = $upload['error'];
			}
		}
		$this->load->view('v_yudisium5', $data);
	}
	
	public function editdata_khs4(){
		$data = array();
		if($this->input->post('submitkhs5')){ 
			$upload = $this->m_upload->upload();
			if($upload['result'] == "success"){ 
				$this->m_upload->editkhs3($upload);
				redirect('yudisium/load_yudisium7');
			}else{ 
				$data['message'] = $upload['error'];
			}
		}
		$this->load->view('v_yudisium6', $data);
	}
	
	public function editdata_khs5(){
		$data = array();
		if($this->input->post('submitkhs6')){ 
			$upload = $this->m_upload->upload();
			if($upload['result'] == "success"){ 
				$this->m_upload->editkhs4($upload);
				redirect('yudisium/load_yudisium8');
			}else{ 
				$data['message'] = $upload['error'];
			}
		}
		$this->load->view('v_yudisium7', $data);
	}
	
	public function tambah()
	{
		$data = array();
		if($this->input->post('submit')){
			$upload = $this->m_upload->upload();
			
			if($upload['result'] == "success"){ 
				$this->m_upload->save($upload);
				redirect('yudisium/getyudisium13'); 
			}else{ 
				$data['message'] = $upload['error'];
			}
		}
		$this->load->view('v_yudisium12', $data);
	}
	
	public function edit(){
		$data = array();
		if($this->input->post('submit')){ 
			$upload = $this->m_upload->upload();
			if($upload['result'] == "success"){ 
				$this->m_upload->editberkas($upload);
				redirect('admin');
			}else{ 
				$data['message'] = $upload['error'];
			}
		}
		$this->load->view('v_daftar', $data);
	}
	
	function getyudisium13(){
		$this->load->view('v_yudisium13');
	}*/
	
}
