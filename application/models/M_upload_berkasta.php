<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_upload_berkasta extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function view_by($nim) {  
        $this->db->select("*");
        $this->db->from("mahasiswa");
        $this->db->where("NIM",$nim);
        return $this->db->get();
    }       

    function cek_datajudulberkas($table,$where) {        
        return $this->db->get_where($table,$where);
    }

    function check_status_berkas($data) {
        $this->db->select('*');
        $this->db->from('berkas');
        $this->db->where('NIM', $data['NIM']);
        return $this->db->get(); 
    }

    function insert_berkas_ta($data) { 
        $config['upload_path']      = './upload/';
        $config['allowed_types']    = 'pdf';
        $config['max_size']         = 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
        $config['max_width']        = 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
        $config['max_height']       = 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
        $this->load->library('upload',$config);

        if (!$this->upload->do_upload('file1')) {

        }
        else {
            $upload_data1          = array('upload_data1' => $this->upload->data()); //memaksukkan data file ke upload_data1
            $data['khs_semester_1'] = $upload_data1['upload_data1']['file_name']; //nama array [kolom] [type format]
        }

        if (!$this->upload->do_upload('file2')) {

        }
        else {
            $upload_data2   = array('upload_data2' => $this->upload->data());
            $data['khs_semester_2'] = $upload_data2['upload_data2']['file_name'];
        }

        if (!$this->upload->do_upload('file3')) {

        }
        else {
            $upload_data3         = array('upload_data3' => $this->upload->data());
            $data['khs_semester_3'] = $upload_data3['upload_data3']['file_name'];
        }

        if (!$this->upload->do_upload('file4')) {

        }
        else {
            $upload_data4        = array('upload_data4' => $this->upload->data());
            $data['khs_semester_4'] = $upload_data4['upload_data4']['file_name'];
        }

        if (!$this->upload->do_upload('file5')) {

        }
        else {
            $upload_data5  = array('upload_data5' => $this->upload->data());
            $data['khs_semester_5'] = $upload_data5['upload_data5']['file_name'];
        }

        if (!$this->upload->do_upload('file6')) {

        }
        else {
            $upload_data6         = array('upload_data6' => $this->upload->data());
            $data['laporan_proposal'] = $upload_data6['upload_data6']['file_name'];
        }

        if (!$this->upload->do_upload('file7')) {

        }
        else {
            $upload_data7    = array('upload_data7' => $this->upload->data());
            $data['kartu_kendali'] = $upload_data7['upload_data7']['file_name'];
        }

        if (!$this->upload->do_upload('file8')) {

        }
        else {
            $upload_data8      = array('upload_data8' => $this->upload->data());
            $data['bukti_spp_terakhir'] = $upload_data8['upload_data8']['file_name'];
        }

        $data['statusBerkasTA'] = 'TIDAK VALID';
        $this->db->insert('berkas', $data); //insert ke database
            redirect(site_url('mahasiswa/C_sidang'));
    }

    function update_berkas_ta($nim,$data) {
        $this->db->where('NIM', $nim);
        $this->db->update('berkas', $data); //update ke database
        redirect(site_url('mahasiswa/C_sidang'));
    }

   
    function judul(){
        $query = $this->db->query('SELECT judul_TA FROM mahasiswa');
        return $query->result();
    }

    function tampil_berkas_ta($NIM = FALSE) {
        if ($NIM === FALSE) {
            $this->db->select('mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, berkas.statusBerkasTA');
            $this->db->from('mahasiswa');
            $this->db->join('berkas', 'mahasiswa.NIM = berkas.NIM');
            $this->db->where('berkas.statusBerkasTA', 0);
            $query = $this->db->get();
            return $query->result(); 
        }
        $this->db->select('mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, berkas.statusBerkasTA, berkas.*');
        $this->db->from('mahasiswa');
        $this->db->join('berkas','mahasiswa.NIM = berkas.NIM');
        $this->db->where('mahasiswa.NIM', $NIM);
        return $this->db->get()->row();
    }

    function acc_berkas_ta($NIM) {
        $this->db->set('statusBerkasTA', 1);
        $this->db->where('NIM', $NIM);
        $this->db->update('berkas');
    }

    // function simpan_berkas_ta($data) {
    //     $this->db->insert ("berkasta",$data);
    // }    
}