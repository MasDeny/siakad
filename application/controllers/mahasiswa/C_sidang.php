<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class C_sidang extends CI_Controller{
	function __construct() {
    parent::__construct();
      $this->load->helper('url');
      $this->load->helper(array('form'));
      $this->load->helper(array('string'));
      $this->load->library('form_validation');
      $this->load->library('image_lib');
      //$this->load->model('M_upload');

    }

  public function index() {
    //$nim =  $this->session->userdata("nama");
        $data['username'] = $this->session->userdata('username');
        //$judul['judul_TA'] = $this->M_datajudulberkas->tampiljudul($nim);
        $this->load->view('mahasiswa/header', $data);
        $this->load->view('mahasiswa/sidebar', $data);
        $this->load->view('mahasiswa/sidang/v_sidang', $data);
        $this->load->view('mahasiswa/footer', $data);
  }

  function multiple_upload(){
        $config['upload_path']   = './uploads/pendaftaransd/'; 
        $config['allowed_types'] = 'pdf'; 
        $config['max_size']      = 99999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999; 
        $config['max_width']     = 99999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999; 
        $config['max_height']    = 99999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;  
        $this->load->library('upload', $config);

        // script upload file pertama
        $this->upload->do_upload('file1');
        $file1 = $this->upload->data();
        echo "<pre>";
        print_r($file1);
        echo "</pre>";
        
        // script uplaod file kedua
        $this->upload->do_upload('file2');
        $file2 = $this->upload->data();
        echo "<pre>";
        print_r($file2);
        echo "</pre>";

        // script upload file ketiga
        $this->upload->do_upload('file3');
        $file3 = $this->upload->data();
        echo "<pre>";
        print_r($file3);
        echo "</pre>";
        
        // script uplaod file keempat
        $this->upload->do_upload('file4');
        $file4 = $this->upload->data();
        echo "<pre>";
        print_r($file4);
        echo "</pre>";

  }
    public function logout(){
        $this->session->session_destroy()();
        redirect('login');
    }
}