<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal_sidang extends CI_Model {
    public function __construct()
    {
        
    }

    public function get_data($id = FALSE)
    {
        
        if ($id === FALSE) {
            $this->db->select('status_sidang.id_statussidang as id,status_sidang.mahasiswa_NIM as NIM,
            nama_mahasiswa as nama,judul_TA as judul,dp1.nm_dosen as dospem')
            ->from('mahasiswa')
            ->join('status_sidang','status_sidang.mahasiswa_NIM=mahasiswa.NIM')
            ->join('dp1','dp1.id_dp1=mahasiswa.dp1_id_dp1')
            ->where('status_sidang.status', 1);
            return $this->db->get()->result();   
        }

        //menampilkan beberapa data yang dipilih yang menyesuaikan dengan controller jadwalsidang 
        //dengan view details

        $this->db->select('status_sidang.id_statussidang as id,status_sidang.mahasiswa_NIM as NIM,
        nama_mahasiswa as nama,judul_TA as judul,dp1.nm_dosen as dospem')
        ->from('mahasiswa')
        ->join('status_sidang','status_sidang.mahasiswa_NIM=mahasiswa.NIM')
        ->join('dp1','dp1.id_dp1=mahasiswa.dp1_id_dp1')
        ->where('status_sidang.id_statussidang', $id);
        return $this->db->get()->row();
    }
    public function show_dosen($nama)
    {
        $this->db->like('nm_dosen',$nama);
        $query=$this->db->get('dp1');
        return $query->result();
    }

    public function save_data($id)
    {
        
    }
}

    

// ini adalah model untuk controller C_koordinator
