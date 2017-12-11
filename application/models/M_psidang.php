<?php
    class m_psidang extends CI_Model {

    //function tampil_regsempro()
    //{
    //    $this->db->select('mahasiswa.NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, Status_Sempro.status');
    //    $this->db->from('mahasiswa');
    //    $this->db->join('Status_Sempro', 'mahasiswa.NIM = Status_Sempro.mahasiswa_NIM');
    //    $this->db->where('Status_Sempro.status', 0);
    //    $query = $this->db->get();
    //    return $query->result();
    //}

    public function tampil_regsidang($NIM = FALSE)
    {
        
        if ($NIM === FALSE) {
            $this->db->select('mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, status_sidang.status');
            $this->db->from('mahasiswa');
            $this->db->join('status_sidang', 'mahasiswa.NIM = status_sidang.mahasiswa_NIM');
            $this->db->where('status_sidang.status', 0);
            $query = $this->db->get();
            return $query->result(); 
        }
        //menampilkan beberapa data yang dipilih yang menyesuaikan dengan controller jadwalsidang 
        //dengan view details

        $this->db->select('mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, dp1.nm_dosen, bukti_spp_terakhir.berkas_spp, berkas.*');
        $this->db->from('mahasiswa');
        $this->db->join('dp1','dp1.id_dp1 = mahasiswa.dp1_id_dp1');
        $this->db->join('status_sidang','mahasiswa.NIM = status_sidang.mahasiswa_NIM');
        $this->db->join('bukti_spp_terakhir','status_sidang.bukti_spp_terakhir_id_bukti = bukti_spp_terakhir.id_bukti');
        $this->db->join('berkas','status_sidang.berkas_id_berkas_kelengkapan = berkas.id_berkas_kelengkapan');
        $this->db->where('mahasiswa.NIM', $NIM);
        return $this->db->get()->row();
    }
    //public function notifikasi_sidang()
    //{
    //    $this->db->set('pesan');
    //    $this->db->where()

    //}

    public function acc_sidang($NIM)
    {
        $this->db->set('status', 1);
        $this->db->where('mahasiswa_NIM', $NIM);
        $this->db->update('status_sidang');
    }
    
    public function simpan_notifikasi($isi)
    {
        $id=0;
        $pesan=$isi;
        $timestamp=date("Y-m-d H:i:s");
        $this->db->query(" INSERT INTO notification VALUES('".$id."','".$pesan."','".$timestamp."','0')");
    }

}
