<?php 

class M_datamahasiswa extends CI_Model{	
	public function view_by($nim){	
		$this->db->select("*");
		$this->db->from("mahasiswa");
		$this->db->where("NIM",$nim);
		$query = $this->db->get();
		return $query;
		//$this->db->where('nama_mahasiswa',$nim);
		//return $this->db->get('mahasiswa');
	}		
	
	function cek_datastudytracer($table,$where){		
		return $this->db->get_where($table,$where);
	}
	
	function select_data_form_yudisium_mahasiswa($data){        
        $this->db->select('*');
        $this->db->from('yudisium');
        $this->db->join("mahasiswa", "yudisium.mahasiswa_NIM = mahasiswa.NIM",'inner');
        $this->db->join("berkas_ta", "yudisium.berkas_TA_idberkas_TA = berkas_ta.idberkas_TA	",'inner');
        $this->db->join("berkas_pkl", "yudisium.berkas_pkl_idberkas_pkl = berkas_pkl.idberkas_pkl",'inner');
        $this->db->join("riwayat_ipmhs", "yudisium.riwayat_ipmhs_idriwayat_ipmhs = riwayat_ipmhs.idriwayat_ipmhs",'inner');
        $this->db->where('yudisium.mahasiswa_NIM', $data['NIM']);
        return $this->db->get();
    }
	
	    public function graph_belum_yudisium($tahun)
		{
			$data = $this->db->query("SELECT COUNT(m.status_mahasiswa) as nilai from mahasiswa m inner join yudisium y on m.nim=y.mahasiswa_NIM where m.status_mahasiswa='mahasiswa' or y.angkatan='$tahun'");
			return $data->result();
		}

		public function graph_sudah_yudisium($tahun)
		{
			$data = $this->db->query("SELECT COUNT(m.status_mahasiswa) as nilai from mahasiswa  m inner join yudisium y on m.nim=y.mahasiswa_NIM where m.status_mahasiswa='alumni' and y.angkatan='$tahun'");
			return $data->result();
		}
		
		function select_all_mahasiswa(){        
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join("yudisium", "yudisium.mahasiswa_NIM = mahasiswa.NIM",'inner');
        $this->db->order_by('NIM');
        return $this->db->get(); 
        }
	
}