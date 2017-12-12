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
        $this->load->model('M_upload_berkas');
        
		// $this->load->model('m_datamahasiswa');
		// if($this->session->userdata('status') == ""){
		// 	redirect('login');
		// }
	}

	public function index(){
        $data['username'] = $this->session->userdata('username');
        $NIM = $this->session->userdata("codeUser");
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

    public function saveberkas($upload){
        $idberkas=0;
        $judulber=0;
        $statusberkas=0;
        $dibuat=0;
        $mhsnim=0;
        $idmhs=0;
        $iddok=0;
        $logkar=0;
        
        $data = array(
            'idBerkasTA' => $idberkas,
            'beritaAcaraTA' => $this->input->post('beritaAcaraTA'),
            'sampul' => $this->input->post('sampul'),
            'judul' => $judulber,
            'pengesahanTA' => $this->input->post('pengesahanTA'),
            'persembahan' => $this->input->post('persembahan'),
            'motto' => $this->input->post('motto'),
            'pernyataanTA' => $this->input->post('pernyataanTA'),
            'abstrak' => $this->input->post('abstrak'),
            'ringkasan' => $this->input->post('ringkasan'),
            'prakata' => $this->input->post('prakata'),
            'daftarIsi' => $this->input->post('daftarIsi'),
            'daftarTabel' => $this->input->post('daftarTabel'),
            'daftarGambar' => $this->input->post('daftarGambar'),
            'daftarLampiran' => $this->input->post('daftarLampiran'),
            'bab1' => $this->input->post('bab1'),
            'bab2' => $this->input->post('bab2'),
            'bab3' => $this->input->post('bab3'),
            'bab4' => $this->input->post('bab4'),
            'bab5' => $this->input->post('bab5'),
            'daftarPustaka' => $this->input->post('daftarPustaka'),
            'lampiran' => $this->input->post('lampiran'),
            'statusBerkasTA' => $statusberkas,
            'dibuat' => $dibuat,
            'mahasiswa_NIM' => $mhsnim,
            'mahasiswa_id_mhs' => $idmhs,
            'mahasiswa_id_dokumen' => $iddok,
            'login_karyawan_id_karyawan' => $logkar
        );

            
        $this->M_upload_berkas->simpan_berkas_ta($data);
        redirect('mahasiswa/Index_mahasiswa');
    }

    public function upload_berkas_ta() {
        $config['upload_path']      = './upload/';
        $config['allowed_types']    = 'pdf';
        $config['max_size']         = 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
        $config['max_width']        = 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
        $config['max_height']       = 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
        $this->load->library('upload',$config);

        $berkas="";
        for($i=1;$i<=20;$i++) {
            $this->upload->do_upload("file".$i);
            $file1 = $this->upload->data();
            $berkas[]=$file1['file_name'];
        }
    
        $data = array(
            'idBerkasTA' => 0,
            'beritaAcaraTA' => $berkas[0],
            'sampul' => $berkas[1],
            'judul' => 0,
            'pengesahanTA' => $berkas[2],
            'persembahan' => $berkas[3],
            'motto' => $berkas[4],
            'pernyataanTA' => $berkas[5],
            'abstrak' => $berkas[6],
            'ringkasan' => $berkas[7],
            'prakata' => $berkas[8],
            'daftarIsi' => $berkas[9],
            'daftarTabel' => $berkas[10],
            'daftarGambar' => $berkas[11],
            'daftarLampiran' => $berkas[12],
            'bab1' => $berkas[13],
            'bab2' => $berkas[14],
            'bab3' => $berkas[15],
            'bab4' => $berkas[16],
            'bab5' => $berkas[17],
            'daftarPustaka' => $berkas[18],
            'lampiran' => $berkas[19],
            'statusBerkasTA' => 0,
            'dibuat' => 0,
            'mahasiswa_NIM' => 0,
            'mahasiswa_id_mhs' => 0,
            'mahasiswa_id_dokumen' => 0,
            'login_karyawan_id_karyawan' => 0
        );

            $this->M_upload_berkas->simpan_berkas_ta($data);
            redirect('mahasiswa/Index_mahasiswa');
    
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}