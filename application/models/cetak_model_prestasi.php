<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class cetak_model_prestasi extends CI_Model {

    public function view()
    {
        $this->db->select('nim,prestasi,tgl_pelaksanaan,deskripsi');
        return $this->db->get('prestasi')->result_array();
    }

    public function getdatabyID($nim){
        return $this->db->get_where('prestasi', array('nim' => $nim))->result();
    }
}

