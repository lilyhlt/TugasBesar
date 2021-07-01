<?php

defined('BASEPATH') or exit('No direct script access allowed');

class login_model extends CI_Model
{

    function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('admin_mahasiswa');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        // $this->db->where('active',1);
        $this->db->limit(1);

        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function register()
    {
        $data = [
            "Username" => $this->input->post("username", true),
            "Email" => $this->input->post("email", true),
            "Password" => $this->input->post("password", true),
            "Active" => 0,
            "Level" => 'mahasiswa',
            "NIM" => $this->input->post("nim", true)
        ];

        $this->db->insert('admin_mahasiswa', $data);
    }

    function nim_exists($key)
    {
        $this->db->select('nim');
        $this->db->from('mahasiswa');
        $query=$this->db->get();
        // $query = $this->db->get('nim');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}


/* End of file login_model.php */
