<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_versempro extends CI_Controller {
    function __construct(){
		parent::__construct();	
        $this->load->model('m_psmpro');
        $this->load->database();
        if ($this->session->userdata('status')=="") {
            redirect('auth');
        }
        #$this->load->helper('text');
	}

	public function index()
	{
        $data['mhs'] = $this->m_psmpro->tampil_regsempro();
        $this->load->view('administrasi/daftar_sempro/v_versempro', $data);
    }

    public function konfirmasi($NIM = NULL) {
        $data['detail_mhs'] = $this->m_psmpro->tampil_regsempro($NIM);   
        $this->load->view('administrasi/daftar_sempro/v_konfirsempro', $data);
    }

    public function sempro_acc($NIM)
    {
        $this->m_psmpro->acc_sempro($NIM);
        redirect('admin/C_versempro');
    }
       
}
