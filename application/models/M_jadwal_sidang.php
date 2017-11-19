<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal_sidang extends CI_Model {
    public function __construct()
    {
        
    }

    public function get_data()
    {
        $this->db->select('status_sidang.mahasiswa_NIM as NIM,
        nama_mahasiswa as nama,judul_TA as judul,dp1.nm_dosen as dospem')
        ->from('mahasiswa')
        ->join('status_sidang','status_sidang.mahasiswa_NIM=mahasiswa.NIM')
        ->join('dp1','dp1.id_dp1=mahasiswa.dp1_id_dp1')
        ->where('status_sidang.status', 1)
        ->order_by('status_sidang.create_at','ASC');
        return $this->db->get()->result();
    }
}

// ini adalah model untuk controller C_koordinator
