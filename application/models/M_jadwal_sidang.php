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
    public function show_dosen()
    {
        $this->db->select('nm_dosen')
        ->from('dp1')
        ->order_by('nm_dosen','asc');
        return $this->db->get()->result();
    }

    //fungsi ini berguna untuk menyimpan data di tabel penguji
    //yang digunakan untuk penentuan jadwal sidang tugas akhir

    public function save_data($id)
    {
            $data = array(
                'ketua'                         => $this->input->post('ketua'),
                'sekertaris'                    => $this->input->post('sekertaris'),
                'anggota'                       => $this->input->post('anggota'),
                'tanggal'                       => $this->input->post('tanggal'),
                'jam'                           => $this->input->post('jam'),
                'ruangan'                       => $this->input->post('ruangan'),
                'status_sidang_id_statussidang' => $id
            );



        return $this->db->insert('penguji', $data);
    }

    // fungsi ini berguna untuk mengupdate dari 1 menjadi 2
    // yang sebelumnya telah terverifikasi oleh admin menjadi 1
    // dan sekarang menjadi 2 karena telah terverifikasi oleh koordinator dan di tentukan jadwal nya

    public function acc_sidang($id)
    {
        $this->db->set('status', 2)
        ->where('id_statussidang', $id)
        ->update('status_sidang');

    }
}

    

// ini adalah model untuk controller C_koordinator
