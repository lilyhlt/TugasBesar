<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class mahasiswa extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('kemahasiswaan_model');
            $this->load->model('cetak_model_mahasiswa');
            
        }
        
    
        public function index()
        {
            $data['title'] = 'List Mahasiswa';
            $nim=$this->session->userdata('NIM');
            $data ['mahasiswa'] = $this->kemahasiswaan_model->getmahasiswaByID($nim);
            $this->load->view("user/mahasiswa",$data);
        }

        public function laporanmahasiswa_pdf(){
        
            $this->load->library('pdf_mahasiswa');
    
            $data['mahasiswa'] = $this->cetak_model_mahasiswa->view();
    
            $this->pdf_mahasiswa->setPaper('A4', 'landscape');
            $this->pdf_mahasiswa->filename = "laporanmahasiswa.pdf";
            $this->pdf_mahasiswa->load_view('user/laporanmahasiswa',$data);
        }
    }