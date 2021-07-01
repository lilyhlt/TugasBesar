<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class nonaktif_model extends CI_Model {
        public $nim;
        
        public function getAllnonaktif()
        {
            return $this->db->get('nonaktif')->result_array();
        }

        public function tambahdatanonaktif(){
            /*$this->nim=uniqid();*/
            $data=[
                "nim"=>$this->input->post('nim',true),
                "nama"=>$this->input->post('nama',true),
                "kelas"=>$this->input->post('kelas',true),
                "keterangan"=>$this->input->post('keterangan',true)
            ];
            $this->db->insert('nonaktif', $data);
        }
    
        public function getnonaktifByID($nim)
        {
            $query = $this->db->get_where('nonaktif', array('nim'=>$nim));
            return $query->row_array();
        }

        public function ubahdatanonaktif(){
            $data = [
                "nim"=>$this->input->post('nim',true),
                "nama"=>$this->input->post('nama',true),
                "kelas"=>$this->input->post('kelas',true),
                "keterangan"=>$this->input->post('keterangan',true)
                ];
            $this->db->where('nim', $this->input->post('nim'));
            $this->db->update('nonaktif', $data);
        }    

        public function cariDataNonaktif(){
            $keyword=$this->input->post('keyword');
            $this->db->or_like('nim',$keyword);
            $this->db->or_like('nama',$keyword);
            $this->db->or_like('kelas',$keyword);
            return $this->db->get('nonaktif')->result_array();
        }

        public function hapusdatanonaktif($nim){
            return $this->db->delete('nonaktif',array("nim" => $nim));
        }

        public function datatabels(){
            $query = $this->db->order_by('nim', 'ASC')->get('nonaktif');
            return $query->result(); 
        }

    }

    
    /* End of file nonaktif_model.php */  
?>