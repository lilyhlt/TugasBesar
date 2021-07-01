<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class prestasi extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('perestasi_model');
            $this->load->model('cetak_model_prestasi');
            
        }
        
    
        public function index()
        {
            $data['title'] = 'List Prestasi';
            $data ['prestasi'] = $this->prestasi_model->getAllPrestasi();
            if($this->input->post('keyword')){
                #code...
                $data['prestasi']=$this->prestasi_model->cariDataPrestasi();
            }
            
            $this->load->view("user/prestasi",$data);
        }

        
    public function laporanprestasi_pdf(){
        
        $this->load->library('pdf_prestasi');

        $data['prestasi'] = $this->cetak_model_prestasi->view();

        $this->pdf_prestasi->setPaper('A4', 'portrait');
        $this->pdf_prestasi->filename = "laporanprestasi.pdf";
        $this->pdf_prestasi->load_view('user/laporanprestasi',$data);
    }
}
    
    /* End of file mahasiswa.php */
    
?>