<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_versidang extends CI_Controller {
    function __construct(){
		parent::__construct();	
        $this->load->model('m_psidang');
        $this->load->database();
        if ($this->session->userdata('status')=="") {
            redirect('auth');
        }
        #$this->load->helper('text');
	}

	public function index()
	{
        $data['mhs'] = $this->m_psidang->tampil_regsidang();
        $this->load->view('administrasi/sidang/v_versidang', $data);
    }

    public function konfirmasi($NIM = NULL) {
        $data['detail_mhs'] = $this->m_psidang->tampil_regsidang($NIM);   
        $this->load->view('administrasi/sidang/v_konfirsidang', $data);
    }

    public function sidang_acc($NIM)
    {
        $this->m_psidang->acc_sidang($NIM);
        redirect('admin/sidang/C_versidang');
    }
    public function simpan_notifikasi()
    {
       $isi=$this->input->post('isi');
        
        $this->m_psidang->simpan_notifikasi($isi);
        redirect('admin/sidang/C_versidang');
    }

}
