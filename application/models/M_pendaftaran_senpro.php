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

        //fungsi ini berguna untuk menyimpan data di tabel penguji
    //yang digunakan untuk penentuan jadwal sidang tugas akhir

    public function save($id)
    {
            $data = array(
                'panelis_1'                         => $this->input->post('panelis_1'),
                'panelis_2'                    => $this->input->post('panelis_2'),
                'panelis_3'                       => $this->input->post('panelis_3'),
                'tanggal'                       => $this->input->post('tanggal'),
                'jam'                           => $this->input->post('jam'),
                'ruangan'                       => $this->input->post('ruangan'),
                'idStatus_Sempro' => $id
            );



        return $this->db->insert('jadwal', $data);
    }

    // fungsi ini berguna untuk mengupdate dari 1 menjadi 2
    // yang sebelumnya telah terverifikasi oleh admin menjadi 1
    // dan sekarang menjadi 2 karena telah terverifikasi oleh koordinator dan di tentukan jadwal nya

    public function acc($id)
    {
        $this->db->set('status', 2)
        ->where('idStatus_Sempro', $id)
        ->update('status_sempro');

    }
}