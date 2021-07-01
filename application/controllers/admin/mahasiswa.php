<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class mahasiswa extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
			$this->load->library('form_validation');
            $this->load->model('kemahasiswaan_model');
            $this->load->model('cetak_model_mahasiswa');
            
        }
        
    
        public function index()
        {
            $data['title'] = 'List Mahasiswa';
            $data ['mahasiswa'] = $this->kemahasiswaan_model->getAllmahasiswa();
            if($this->input->post('keyword')){
                #code...
                $data['mahasiswa']=$this->kemahasiswaan_model->cariDataMahasiswa();
            }
            
            $this->load->view("admin/kemahasiswaan/listmahasiswa",$data);
        }

        public function tambah()
        {
            $data['title'] = 'Form Tambah Data Mahasiswa';
            $this->form_validation->set_rules('nim','Nim','required|is_unique[mahasiswa.nim]', ['is_unique' => 'NIM Sudah digunakan']);
            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('prodi','Prodi','required');
            $this->form_validation->set_rules('jurusan','Jurusan','required');
            $this->form_validation->set_rules('email','Email','required');
            if ($this->form_validation->run()==FALSE){
                $this->load->view("admin/kemahasiswaan/tambahmahasiswa",$data);
            }
            else{
                $this->kemahasiswaan_model->tambahdatamhs();
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tambah Data Berhasil!</div>');
                redirect('admin/mahasiswa','refresh');
            
            }
        }

        public function detail($id)
        {
            $data['title']='Detail Mahasiswa';
            $data['mahasiswa']= $this->kemahasiswaan_model->getmahasiswaByID($id);
            $this->load->view("admin/kemahasiswaan/detailmahasiswa",$data);
        }

        
        public function edit($id){
            $data ['title']='Form Edit Data Mahasiswa';
            $this->form_validation->set_rules('nim','Nim','required');
            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('prodi','Prodi','required');
            $this->form_validation->set_rules('jurusan','Jurusan','required');
            $this->form_validation->set_rules('email','Email','required');
       
            if ($this->form_validation->run() == FALSE){
            #code...    
            $data['mahasiswa']= $this->kemahasiswaan_model->getmahasiswaByID($id);        
                $this->load->view("admin/kemahasiswaan/editmahasiswa", $data);
            }
            else{
            #code...
                $this->kemahasiswaan_model->ubahdatamahasiswa();
                $this->session->set_flashdata('flash-data','diedit');
                redirect('admin/mahasiswa','refresh');
            }
        }   

        public function hapus($id){
            $this->kemahasiswaan_model->hapusdatamhs($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
            redirect('admin/mahasiswa','refresh');
        }

        
    /*public function laporanmahasiswa_pdf(){
        
        $this->load->library('pdf_mahasiswa');

        $data['mahasiswa'] = $this->cetak_model_mahasiswa->view();

        $this->pdf_mahasiswa->setPaper('A4', 'landscape');
        $this->pdf_mahasiswa->filename = "laporanmahasiswa.pdf";
        $this->pdf_mahasiswa->load_view('admin/kemahasiswaan/laporanmahasiswa',$data);
    }*/
}
    
    /* End of file mahasiswa.php */
    
?>