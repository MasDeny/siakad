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
        // $cek = $this->M_upload_berkas->cek_datajudulberkas("berkasta",$where)->num_rows();
        // if($cek > 0) {
        //     $this->load->view('mahasiswa/header', $data);
        //     $this->load->view('mahasiswa/sidebar', $data);
        //     $this->load->view('mahasiswa/upload_berkas/v_terverifikasi', $data);
        //     $this->load->view('mahasiswa/footer', $data);
        // } else {
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
        $data['NIM'] = $_SESSION['codeUser'];
        $data_berkas_ta = $this->M_upload_berkasta->check_status_berkas($data)->row();
        $num_berkas_ta = count($data_berkas_ta);
        if(!$num_berkas_ta==1) { //jika belum pernah input
            $this->M_upload_berkasta->insert_berkas_ta($data);
        }
        else {
        $nim = $_SESSION['codeUser'];
        $this->db->where('NIM',$nim);
        $query = $this->db->get('berkas');
        $row = $query->row();

        $config['upload_path']      = './upload/';
        $config['allowed_types']    = 'pdf';
        $config['max_size']         = 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
        $config['max_width']        = 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
        $config['max_height']       = 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
        $this->load->library('upload',$config);

        $error1=NULL;
        $error2=NULL;
        $error3=NULL;
        $error4=NULL;
        $error5=NULL;
        $error6=NULL;
        $error7=NULL;
        $error8=NULL;
       
        //error=0 (kalo input kosong) , error=1 (kalo format input salah) , error=2 (kalo mau upload)

        if (!$this->upload->do_upload('file1')) {
            $file1 = $_FILES['file1']['name']; //nama array [kolom] [type format]
            if($file1=='') {
                $error1=0;
            }
            else {
                $error1=1;
            }
        }
        else {
            $upload_data1 = array('upload_data1' => $this->upload->data()); //memaksukkan data file ke upload_data1
            $file1 = $upload_data1['upload_data1']['file_name']; //nama array [kolom] [type format]
            $error1=2;
            unlink("./upload/$file1");
        }

        if (!$this->upload->do_upload('file2')) {
            $file2 = $_FILES['file2']['name'];
            if($file2=='') {
                $error2=0;
            }
            else {
                $error2=1;
            }
        }
        else {
            $upload_data2 = array('upload_data2' => $this->upload->data());
            $file2 = $upload_data2['upload_data2']['file_name'];
            $error2=2;
            unlink("./upload/$file2");
        }

        if (!$this->upload->do_upload('file3')) {
            $file3 = $_FILES['file3']['name'];
            if($file3=='') {
                $error3=0;
            }
            else {
                $error3=1;
            }
        }
        else {
            $upload_data3 = array('upload_data3' => $this->upload->data());
            $file3 = $upload_data3['upload_data3']['file_name'];
            $error3=2;
            unlink("./upload/$file3");
        }

        if (!$this->upload->do_upload('file4')) {
            $file4 = $_FILES['file4']['name'];
            if($file4=='') {
                $error4=0;
            }
            else {
                $error4=1;
            }
        }
        else {
            $upload_data4 = array('upload_data4' => $this->upload->data());
            $file4 = $upload_data4['upload_data4']['file_name'];
            $error4=2;
            unlink("./upload/$file4");
        }

        if (!$this->upload->do_upload('file5')) {
            $file5 = $_FILES['file5']['name'];
            if($file5=='') {
                $error5=0;
            }
            else {
                $error5=1;
            }
        }
        else {
            $upload_data5 = array('upload_data5' => $this->upload->data());
            $file5 = $upload_data5['upload_data5']['file_name'];
            $error5=2;
            unlink("./upload/$file5");
        }

        if (!$this->upload->do_upload('file6')) {
            $file6 = $_FILES['file6']['name'];
            if($file6=='') {
                $error6=0;
            }
            else {
                $error6=1;
            }
        }
        else {
            $upload_data6 = array('upload_data6' => $this->upload->data());
            $file6 = $upload_data6['upload_data6']['file_name'];
            $error6=2;
            unlink("./upload/$file6");
        }

        if (!$this->upload->do_upload('file7')) {
            $file7 = $_FILES['file7']['name'];
            if($file7=='') {
                $error7=0;
            }
            else {
                $error7=1;
            }
        }
        else {
            $upload_data7 = array('upload_data7' => $this->upload->data());
            $file7 = $upload_data7['upload_data7']['file_name'];
            $error7=2;
            unlink("./upload/$file7");
        }

        if (!$this->upload->do_upload('file8')) {
            $file8 = $_FILES['file8']['name'];
            if($file8=='') {
                $error8=0;
            }
            else {
                $error8=1;
            }
        }
        else {
            $upload_data8 = array('upload_data8' => $this->upload->data());
            $file8 = $upload_data8['upload_data8']['file_name'];
            $error8=2;
            unlink("./upload/$file8");
        }

        if($error1==0 && $error2==0 && $error3==0 && $error4==0 && $error5==0 && $error6==0 && $error7==0 && $error8==0) {
            redirect(site_url('Yudisium/daftar_yudisium'));
        }
        else if ($error1==1 || $error2==1 || $error3==1 || $error4==1 || $error5==1 || $error6==1 || $error7==1 || $error8==1) {
            $data['NIM']=$_SESSION['username'];
            $data['data_berkas_ta']  = $this->M_upload_berkasta->check_status_berkas($data)->row();
            $error = array('error'=>'format file salah harus format *.pdf');
            $this->load->view('mahasiswa/header', $data, TRUE);
            $this->load->view('mahasiswa/sidebar', $data, TRUE);
            $this->load->view('mahasiswa/upload_berkas/v_upload', $error, TRUE);
            $this->load->view('mahasiswa/footer', $data, TRUE);
            return;
        }
        else if($error1==2) {
            $this->upload->do_upload('file1');
            unlink("./upload/$row-> khs_semester_1");
            $upload_data1          = array('upload_data1' => $this->upload->data()); //memasukkan data file ke upload_data1
            $data[' khs_semester_1'] = $upload_data1['upload_data1']['file_name']; //nama array [kolom] [type format]
        }
        if($error2==2) {
            $this->upload->do_upload('file2');
            unlink("./upload/$row->khs_semester_2");
            $upload_data2   = array('upload_data2' => $this->upload->data());
            $data['khs_semester_2'] = $upload_data2['upload_data2']['file_name'];
        }
        if($error3==2) {
            $this->upload->do_upload('file3');
            unlink("./upload/$row->khs_semester_3");
            $upload_data3         = array('upload_data3' => $this->upload->data());
            $data['khs_semester_3'] = $upload_data3['upload_data3']['file_name'];
        }
        if($error4==2) {
            $this->upload->do_upload('file4');
            unlink("./upload/$row->khs_semester_4");
            $upload_data4        = array('upload_data4' => $this->upload->data());
            $data['khs_semester_4'] = $upload_data4['upload_data4']['file_name'];
        }
        if($error5==2) {
            $this->upload->do_upload('file5');
            unlink("./upload/$row->khs_semester_5");
            $upload_data5  = array('upload_data5' => $this->upload->data());
            $data['khs_semester_5'] = $upload_data5['upload_data5']['file_name'];
        }
        if($error6==2) {
            $this->upload->do_upload('file6');
            unlink("./upload/$row->laporan_proposal");
            $upload_data6         = array('upload_data6' => $this->upload->data());
            $data['laporan_proposal'] = $upload_data6['upload_data6']['file_name'];
        }
        if($error7==2) {
            $this->upload->do_upload('file7');
            unlink("./upload/$row->kartu_kendali");
            $upload_data7    = array('upload_data7' => $this->upload->data());
            $data['kartu_kendali'] = $upload_data7['upload_data7']['file_name'];
        }
        if($error8==2) {
            $this->upload->do_upload('file8');
            unlink("./upload/$row->bukti_spp_terakhir");
            $upload_data8      = array('upload_data8' => $this->upload->data());
            $data['bukti_spp_terakhir'] = $upload_data8['upload_data8']['file_name'];
        }
        
        $this->M_upload_berkasta->update_berkas_ta($nim,$data);
        }
    }

    public function logout(){
        $this->session->session_destroy();
        redirect('login');
    }
}