<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class cetak_model_nonaktif extends CI_Model {

    public function view()
    {
        $this->db->select('nim,nama,kelas,keterangan');
        return $this->db->get('mahasiswa_nonaktif')->result_array();
    }

    public function getdatabyID($nim){
        return $this->db->get_where('mahasiswa_nonaktif', array('nim' => $nim))->result();
    }
}

