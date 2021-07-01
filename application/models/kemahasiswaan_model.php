<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class kemahasiswaan_model extends CI_Model {
        public $nim;
        
        public function getAllmahasiswa()
        {
            $this->db->select('*');
            $this->db->from('mahasiswa');
            $where="nim NOT IN ('111')";
            $this->db->where($where);
            $query=$this->db->get()->result_array();
            
            return $query;
        }

        public function tambahdatamhs(){
            $this->nim=uniqid();
            $data=[
            "nama"=>$this->input->post('nama',true),
            "nim"=>$this->input->post('nim',true),
            "prodi"=>$this->input->post('prodi',true),
            "jurusan"=>$this->input->post('jurusan',true),
            "email"=>$this->input->post('email',true),
           
            ];
            $this->db->insert('mahasiswa', $data);
        }
    
        public function getmahasiswaByID($nim)
        {
            $query = $this->db->get_where('mahasiswa', ["nim"=>$nim])->result_array();
            return $query;
        }

        public function ubahdatamahasiswa(){
            $data = [
                "nama" => $this->input->post('nama', true),
                "nim" => $this->input->post('nim', true),
                "prodi" => $this->input->post('prodi', true),
                "jurusan"=>$this->input->post('jurusan',true),
                "email"=>$this->input->post('email',true)
                ];
            $this->db->where('nim', $this->input->post('nim'));
            $this->db->update('mahasiswa', $data);
        }    

        public function cariDataMahasiswa(){
            $keyword=$this->input->post('keyword');
            $this->db->like('nama',$keyword);
            $this->db->or_like('nim',$keyword);
            $this->db->or_like('prodi',$keyword);
            $this->db->or_like('jurusan',$keyword);
            $this->db->or_like('email',$keyword);
            return $this->db->get('mahasiswa')->result_array();
        }

        public function hapusdatamhs($nim){
            return $this->db->delete('mahasiswa',array("nim" => $nim));
        }

        public function datatabels(){
            $query = $this->db->order_by('nim', 'ASC')->get('mahasiswa');
            return $query->result(); 
        }

    }

    
    /* End of file kemahasiswaan_model.php */  
?>