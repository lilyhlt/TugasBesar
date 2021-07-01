<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class prestasi_model extends CI_Model {
        public $nim;
        
        public function getAllprestasi()
        {
            return $this->db->get('prestasi')->result_array();
        }

        public function tambahdataprestasi(){
            $data=[
				"nim"=>$this->input->post('nim',true),
                "prestasi"=>$this->input->post('prestasi',true),
                "tgl_pelaksanaan"=>$this->input->post('tgl_pelaksanaan',true),
                "deskripsi"=>$this->input->post('deskripsi',true),
				"foto"=>$this->input->post('foto',true)
            ];
            $this->db->insert('prestasi', $data);
        }
    
        public function getprestasiByID($nim)
        {
            $query = $this->db->get_where('prestasi', array('nim'=>$nim));
            return $query->row_array();
        }

        public function ubahdataprestasi(){
            $data = [
                "prestasi"=>$this->input->post('prestasi',true),
                "tgl_pelaksanaan"=>$this->input->post('tgl_pelaksanaan',true),
                "deskripsi"=>$this->input->post('deskripsi',true),
                ];
            $this->db->where('nim', $this->input->post('nim'));
            $this->db->update('prestasi', $data);
        }    

        public function cariDataPrestasi(){
            $keyword=$this->input->post('keyword');
            $this->db->or_like('prestasi',$keyword);
            $this->db->or_like('nim',$keyword);
            $this->db->or_like('tgl_pelaksanaan',$keyword);
            return $this->db->get('prestasi')->result_array();
        }

        public function hapusdataprestasi($nim){
            return $this->db->delete('prestasi',array("nim" => $nim));
        }

        public function datatabels(){
            $query = $this->db->order_by('nim', 'ASC')->get('prestasi');
            return $query->result(); 
        }

    }

    
    /* End of file prestasi_model.php */  
?>