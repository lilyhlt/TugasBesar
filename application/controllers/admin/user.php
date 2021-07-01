<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public function __construct()
    {
        parent::__construct(); //memanggil method contructor pd controller
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('kemahasiswaan_model');
        $this->load->model('cetak_model_mahasiswa');
    }

    public function index()
    {
        $data = array(
            "title" => 'Data Mahasiswa',
            "kemahasiswaan" => $this->kemahasiswaan_model->datatabels()
        );
        $this->load->view('admin/template/header_datatabels_mahasiswa',$data);
        $this->load->view('admin/kemahasiswaan/user',$data);
        $this->load->view('admin/template/footer_datatabels_mahasiswa');
        
    }

    public function laporan_pdf($Id){
        
        $this->load->library('pdf_mahasiswa');

        $data['kemahasiswaan'] = $this->cetak_model_mahasiswa->getdatabyID($Id);

        $this->pdf_mahasiswa->setPaper('A4', 'portrait');
        $this->pdf_mahasiswa->filename = "laporan.pdf";
        $this->pdf_mahasiswa->load_view('admin/kemahasiswaan/laporan', $data);
    }

}

/* End of file Controllername.php */
