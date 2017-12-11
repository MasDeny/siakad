<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_upload_berkas extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function upload_path(){
        $data = array(
            'path' =>$upload_data['full_path'],

            );

        return $this->db->insert('upload', $data);


    }
}