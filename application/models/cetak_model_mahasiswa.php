<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class cetak_model_mahasiswa extends CI_Model {

    public function view()
    {
        $this->db->select('nim,nama,prodi,jurusan,email');
        return $this->db->get('mahasiswa')->result_array();
    }

    public function getdatabyID($nim){
        return $this->db->get_where('mahasiswa', array('nim' => $nim))->result();
    }
}

