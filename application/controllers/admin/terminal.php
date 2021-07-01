<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class terminal extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->model('terminal_model');
            $this->load->model('terminal_model');
            
        }
        
    
        public function index()
        {
            $data['title'] = 'Mahasiswa Terminal';
            $data ['terminal'] = $this->terminal_model->getAllTerminal();
            if($this->input->post('keyword')){
                #code...
                $data['terminal']=$this->terminal_model->cariDataTerminal();
            }
            
            $this->load->view("admin/terminal/listterminal",$data);
        }

        public function tambah()
        {
            $data['title'] = 'Form Tambah Data Mahasiswa Terminal';
            $this->form_validation->set_rules('nim','NIM','required');
            $this->form_validation->set_rules('nama','Nama Mahasiswa','required');
            $this->form_validation->set_rules('kelas','Kelas','required');
            $this->form_validation->set_rules('keterangan','Keterangan','required');
            if ($this->form_validation->run()==FALSE){
                $this->load->view("admin/terminal/tambahterminal",$data);
            }
            else{
                $this->terminal_model->tambahdataterminal();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tambah Data Berhasil!</div>');
                redirect('admin/terminal','refresh');
            
            }
        }

        public function detail($id)
        {
            $data['title']='Detail Data Mahasiswa Terminal';
            $data['terminal']= $this->terminal_model->getterminalByID($id);
            $this->load->view("admin/terminal/detailterminal",$data);
        } 

        public function edit($id)
        {
            $data['title']='Form Edit Data Prestasi Mahasiswa';
            $this->form_validation->set_rules('nim', 'NIM', 'required');
            $this->form_validation->set_rules('nama', 'Nama', 'required'); 
            $this->form_validation->set_rules('kelas', 'Kelas', 'required');
            $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

            if ($this->form_validation->run()==FALSE){
                $data['terminal']=$this->terminal_model->getterminalByID($id);
                $this->load->view("admin/terminal/editterminal",$data);
            }
            else{
                $this->terminal_model->ubahdataterminal();
                $this->session->set_flashdata('flash-data', 'diedit');
                redirect('admin/terminal', 'refresh');
            }
        }

        public function hapus($id)
        {
            $this->terminal_model->hapusdataterminal($id);
            $this->session->set_flashdata('flash-data','dihapus');
            redirect('admin/terminal','refresh');
        }

        
    public function laporanterminal_pdf(){
        
        $this->load->library('pdf_terminal');

        $data['terminal'] = $this->cetak_model_terminal->view();

        $this->pdf_terminal->setPaper('A4', 'portrait');
        $this->pdf_terminal->filename = "laporanterminal.pdf";
        $this->pdf_terminal->load_view('admin/terminal/laporanterminal',$data);
    }
}
    
    /* End of file mahasiswa.php */
    
?>