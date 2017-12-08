<?php
    class m_psmpro extends CI_Model {

    //function tampil_regsempro()
    //{
    //    $this->db->select('mahasiswa.NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, Status_Sempro.status');
    //    $this->db->from('mahasiswa');
    //    $this->db->join('Status_Sempro', 'mahasiswa.NIM = Status_Sempro.mahasiswa_NIM');
    //    $this->db->where('Status_Sempro.status', 0);
    //    $query = $this->db->get();
    //    return $query->result();
    //}

    public function tampil_regsempro($NIM = FALSE)
    {
        
        if ($NIM === FALSE) {
            $this->db->select('mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, Status_Sempro.status');
            $this->db->from('mahasiswa');
            $this->db->join('Status_Sempro', 'mahasiswa.NIM = Status_Sempro.mahasiswa_NIM');
            $this->db->where('Status_Sempro.status', 0);
            $query = $this->db->get();
            return $query->result(); 
        }
        //menampilkan beberapa data yang dipilih yang menyesuaikan dengan controller jadwalsidang 
        //dengan view details

        $this->db->select('mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, dp1.nm_dosen, Status_Sempro.status, dokumen_kelengkapan_senpro.*');
        $this->db->from('mahasiswa');
        $this->db->join('dp1','dp1.id_dp1 = mahasiswa.dp1_id_dp1');
        $this->db->join('Status_Sempro','mahasiswa.NIM = Status_Sempro.mahasiswa_NIM');
        $this->db->join('dokumen_kelengkapan_senpro','Status_Sempro.dokumen_kelengkapan_senpro_iddokumen_kelengkapan_senpro = dokumen_kelengkapan_senpro.iddokumen_kelengkapan_senpro');
        $this->db->where('mahasiswa.NIM', $NIM);
        return $this->db->get()->row();
    }

    public function acc_sempro($NIM)
    {
        $this->db->set('status', 1);
        $this->db->where('mahasiswa_NIM', $NIM);
        $this->db->update('Status_Sempro');
    }

}
