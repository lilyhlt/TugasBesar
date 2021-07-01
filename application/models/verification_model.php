<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class verification_model extends CI_Model {
    public function getactive(){
        $this->db->select('*');
        $this->db->from('admin_mahasiswa');
        $this->db->where('Active', 0);

        $query= $this->db->get();
        return $query->result_array();
    }

    public function verification($id){
        $hasil = $this->db->query("UPDATE admin_mahasiswa SET Active='1' WHERE id=$id");
        return $hasil;
    }

}

/* End of file verification_model.php */
