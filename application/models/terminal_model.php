<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class terminal_model extends CI_Model {
        public $nim;
        
        public function getAllterminal()
        {
            return $this->db->get('terminal')->result_array();
        }

        public function tambahdataterminal(){
            /*$this->nim=uniqid();*/
            $data=[
                "nim"=>$this->input->post('nim',true),
                "nama"=>$this->input->post('nama',true),
                "kelas"=>$this->input->post('kelas',true),
                "keterangan"=>$this->input->post('keterangan',true)
            ];
            $this->db->insert('terminal', $data);
        }
    
        public function getterminalByID($nim)
        {
            $query = $this->db->get_where('terminal', array('nim'=>$nim));
            return $query->row_array();
        }

        public function ubahdataterminal(){
            $data = [
                "nim"=>$this->input->post('nim',true),
                "nama"=>$this->input->post('nama',true),
                "kelas"=>$this->input->post('kelas',true),
                "keterangan"=>$this->input->post('keterangan',true)
                ];
            $this->db->where('nim', $this->input->post('nim'));
            $this->db->update('terminal', $data);
        }    

        public function cariDataTerminal(){
            $keyword=$this->input->post('keyword');
            $this->db->or_like('nim',$keyword);
            $this->db->or_like('nama',$keyword);
            $this->db->or_like('kelas',$keyword);
            return $this->db->get('terminal')->result_array();
        }

        public function hapusdataterminal($nim){
            return $this->db->delete('terminal',array("nim" => $nim));
        }

        public function datatabels(){
            $query = $this->db->order_by('nim', 'ASC')->get('terminal');
            return $query->result(); 
        }

    }

    
    /* End of file terminal_model.php */  
?>