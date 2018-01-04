<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_upload_berkasta extends CI_Model{



    public function getUser($table_name)
    {
    $get_user=$this->db->get($table_name);
    return $get_user->result_array();
    }

    public function tambahData($table_name,$data)
    {
    $this->db->insert($table_name,$data);
    }


    public function simpansidang($data)
    {
    $this->db->insert ("berkas",$data);
    $idberkas = $this->db->insert_id();
    return $idberkas;
    }

    public function simpan($data)
    {
    $this->db->insert ("status_sidang",$data);
    }

    public function cek_status()
    {
        $this->db->select('mahasiswa.NIM,status_sempro.status as status');
        $this->db->from('mahasiswa');
        $this->db->join('status_sempro','status_sempro.mahasiswa_NIM = mahasiswa.NIM');
        $this->db->where('mahasiswa.NIM', $this->session->userdata("codeUser"));
        return $this->db->get()->row();

    }

    public function view_by($nim) {
         $this->db->select("*");
         $this->db->from("mahasiswa");
         $this->db->where("NIM",$nim);
         return $this->db->get();
    }

    // function cek_datajudulberkas($table,$where) {
    //     return $this->db->get_where($table,$where);
    // }

    // function check_status_berkas($data) {
    //     $this->db->select('*');
    //     $this->db->from('berkas');
    //     $this->db->join('status_sidang', 'status_sidang.berkas_id_berkas_kelengkapan = berkas.id_berkas_kelengkapan' );
    //     $this->db->where('status_sidang.mahasiswa_NIM', $data['NIM']);
    //     return $this->db->get();
    // }

    // function insert_berkas_ta($data) {
    //     $data['statusBerkasTA'] = 'TIDAK VALID';
    //     $this->db->insert('berkas', $data); //insert ke database
    // }

    // function update_berkas_ta($nim,$data) {
    //     $this->db->where('NIM', $nim);
    //     $this->db->update('berkas', $data); //update ke database
    //     redirect(site_url('mahasiswa/C_sidang'));
    // }


    // function judul(){
    //     $query = $this->db->query('SELECT judul_TA FROM mahasiswa');
    //     return $query->result();
    // }

    // function tampil_berkas_ta($NIM = FALSE) {
    //     if ($NIM === FALSE) {
    //         $this->db->select('mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, berkas.statusBerkasTA');
    //         $this->db->from('mahasiswa');
    //         $this->db->join('berkas', 'mahasiswa.NIM = berkas.NIM');
    //         $this->db->where('berkas.statusBerkasTA', 0);
    //         $query = $this->db->get();
    //         return $query->result();
    //     }
    //     $this->db->select('mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, berkas.statusBerkasTA, berkas.*');
    //     $this->db->from('mahasiswa');
    //     $this->db->join('berkas','mahasiswa.NIM = berkas.NIM');
    //     $this->db->where('mahasiswa.NIM', $NIM);
    //     return $this->db->get()->row();
    // }

    // function acc_berkas_ta($NIM) {
    //     $this->db->set('statusBerkasTA', 1);
    //     $this->db->where('NIM', $NIM);
    //     $this->db->update('berkas');
    // }

     public function check($NIM)
     {
         $this->db->select('dokumen_kelengkapan_senpro.lembar_revisi as revisi')
         ->from('status_sempro')
         ->join('dokumen_kelengkapan_senpro', 'status_sempro.dokumen_kelengkapan_senpro_iddokumen_kelengkapan_senpro = dokumen_kelengkapan_senpro.iddokumen_kelengkapan_senpro')
         ->where('status_sempro.mahasiswa_NIM', $NIM);
         return $this->db->get()->row();
    }

    // function simpan_berkas_ta($data) {
    //     $this->db->insert ("berkasta",$data);
    // }
}