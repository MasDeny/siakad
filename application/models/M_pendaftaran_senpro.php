<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pendaftaran_senpro extends CI_Model {
    
    public function __construct()
    {
        
    }

    public function get_data($id = FALSE)
    {
        
        if ($id === FALSE) {
            $this->db->select('status_sempro.idStatus_Sempro as id,status_sempro.mahasiswa_NIM as NIM,
            nama_mahasiswa as nama,judul_TA as judul,dp1.nm_dosen as dospem')
            ->from('mahasiswa')
            ->join('status_sempro','status_sempro.mahasiswa_NIM=mahasiswa.NIM')
            ->join('dp1','dp1.id_dp1=mahasiswa.dp1_id_dp1')
            ->where('status_sempro.status', 1);
            return $this->db->get()->result();   
        }

        //menampilkan beberapa data yang dipilih yang menyesuaikan dengan controller jadwalsidang 
        //dengan view details

        $this->db->select('status_sempro.idStatus_Sempro as id,status_sempro.mahasiswa_NIM as NIM,
        nama_mahasiswa as nama,judul_TA as judul,dp1.nm_dosen as dospem')
        ->from('mahasiswa')
        ->join('status_sempro','status_sempro.mahasiswa_NIM=mahasiswa.NIM')
        ->join('dp1','dp1.id_dp1=mahasiswa.dp1_id_dp1')
        ->where('status_sempro.idStatus_Sempro', $id);
        return $this->db->get()->row();
    }
}