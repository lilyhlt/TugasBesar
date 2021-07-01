<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class nonaktif extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->model('nonaktif_model');
            $this->load->model('cetak_model_nonaktif');
            
        }
        
    
        public function index()
        {
            $data['title'] = 'Mahasiswa Non-Aktif';
            $data ['nonaktif'] = $this->nonaktif_model->getAllNonaktif();
            if($this->input->post('keyword')){
                #code...
                $data['nonaktif']=$this->nonaktif_model->cariDataNonaktif();
            }
            
            $this->load->view("admin/nonaktif/listnonaktif",$data);
        }

        public function tambah()
        {
            $data['title'] = 'Form Tambah Data Mahasiswa Non-Aktif';
            $this->form_validation->set_rules('nim','NIM','required');
            $this->form_validation->set_rules('nama','Nama Mahasiswa','required');
            $this->form_validation->set_rules('kelas','Kelas','required');
            $this->form_validation->set_rules('keterangan','Keterangan','required');
            if ($this->form_validation->run()==FALSE){
                $this->load->view("admin/nonaktif/tambahnonaktif",$data);
            }
            else{
                $this->nonaktif_model->tambahdatanonaktif();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tambah Data Berhasil!</div>');
                redirect('admin/nonaktif','refresh');
            
            }
        }

        public function detail($id)
        {
            $data['title']='Detail Data Mahasiswa Non-Aktif';
            $data['nonaktif']= $this->nonaktif_model->getnonaktifByID($id);
            $this->load->view("admin/nonaktif/detailnonaktif",$data);
        } 

        public function edit($id)
        {
            $data['title']='Form Edit Data Prestasi Mahasiswa';
            $this->form_validation->set_rules('nim', 'NIM', 'required');
            $this->form_validation->set_rules('nama', 'Nama', 'required'); 
            $this->form_validation->set_rules('kelas', 'Kelas', 'required');
            $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

            if ($this->form_validation->run()==FALSE){
                $data['nonaktif']=$this->nonaktif_model->getnonaktifByID($id);
                $this->load->view("admin/nonaktif/editnonaktif",$data);
            }
            else{
                $this->nonaktif_model->ubahdatanonaktif();
                $this->session->set_flashdata('flash-data', 'diedit');
                redirect('admin/nonaktif', 'refresh');
            }
        }

        public function hapus($id)
        {
            $this->nonaktif_model->hapusdatanonaktif($id);
            $this->session->set_flashdata('flash-data','dihapus');
            redirect('admin/nonaktif','refresh');
        }

        
    public function laporannonaktif_pdf(){
        
        $this->load->library('pdf_nonaktif');

        $data['nonaktif'] = $this->cetak_model_nonaktif->view();

        $this->pdf_nonaktif->setPaper('A4', 'portrait');
        $this->pdf_nonaktif->filename = "laporannonaktif.pdf";
        $this->pdf_nonaktif->load_view('admin/nonaktif/laporannonaktif',$data);
    }
}
    
    /* End of file mahasiswa.php */
    
?>