<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_datajudulberkas extends CI_Model{
    function tampiljudul($nim){
           $this->db->select('judul_TA')
            ->from('mahasiswa')
            ->where('NIM',$nim);
            return $this->db->get()->row(); 
    }
}