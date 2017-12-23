<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_sidang extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper(array('form'));
        $this->load->helper(array('string'));
        $this->load->library('image_lib');
        $this->load->library('form_validation');
        $this->load->model('M_upload_berkasta');
        if(!isset($this->session->userdata['codeUser'])) {
            redirect("login","refresh");
        }
    }

    public function index(){
        $data['username'] = $this->session->userdata('username');
        $NIM = $this->session->userdata("codeUser");
        $where = array(
             'NIM' => $NIM
        );
        $data['mahasiswa'] = $this->M_upload_berkasta->view_by($NIM);
        $cek = $this->M_upload_berkasta->check($NIM);
        $status = $cek->revisi;
        if ($status == !NULL) {
            $this->load->view('mahasiswa/header', $data);
            $this->load->view('mahasiswa/sidebar', $data);
            $this->load->view('mahasiswa/sidang/v_sidang', $data);
            $this->load->view('mahasiswa/footer', $data);
        }else{
            $this->load->view('mahasiswa/header', $data);
            $this->load->view('mahasiswa/sidebar', $data);
            $this->load->view('mahasiswa/sidang/v_gagal', $data);
            $this->load->view('mahasiswa/footer', $data);
        }
    }

    public function proses_upload_berkas() {
     $nim = $data['NIM'] = $_SESSION['codeUser'];
    //$id_pkl=$this->m_upload->getkode_pkl();
    $config['upload_path']      = './upload/sidang/';
    $config['allowed_types']    = 'pdf|jpg|png';
    $config['max_size']         = 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
    $config['max_width']        = 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
    $config['max_height']       = 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
    $this->load->library('upload',$config);
    $this->load->helper('file');
    $dok="";
    for($i=1;$i<=8;$i++)
    {
        $file = "file".$i;
        $config['file_name'] = $i.'_file_'.$nim;
        $this->upload->initialize($config);
        $this->upload->do_upload($file);
        $file_1 = $this->upload->data();
        $dok[]=$file_1['file_name'];
    }
    $data = array(
            'khs_semester_1' => $dok[0],
            'khs_semester_2' => $dok[1],
            'khs_semester_3' => $dok[2],
            'khs_semester_4' => $dok[3],
            'khs_semester_5' => $dok[4],
            'laporan_proposal' => $dok[5],
            'kartu_kendali' => $dok[6],
            'bukti_spp_terakhir' => $dok[7],
            );
            //$this->M_upload_berkasta->simpansidang($data);
            $id = $this->M_upload_berkasta->simpansidang($data);
            $datastatus = array(
            'mahasiswa_NIM' => $nim,
            'berkas_id_berkas_kelengkapan' => $id ,
            'status' => 0
            );
        $this->M_upload_berkasta->simpan($datastatus);
            //echo implode("<br>",$data);
            $this->load->view('mahasiswa/header', $data);
            $this->load->view('mahasiswa/sidebar', $data);
            $this->load->view('mahasiswa/sidang/V_sukses_upload', $data);
            $this->load->view('mahasiswa/footer', $data);
    }


    public function logout(){
        $this->session->session_destroy();
         redirect('login');
     }
 }