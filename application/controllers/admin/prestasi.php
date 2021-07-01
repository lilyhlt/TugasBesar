<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class prestasi extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
			$this->load->library('form_validation');
            $this->load->model('prestasi_model');
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
            
            $this->load->view("admin/prestasi/listprestasi",$data);
        }

        public function tambah()
        {
            $data['title'] = 'Form Tambah Data Prestasi';
            $this->form_validation->set_rules('nim','NIM','required');
            $this->form_validation->set_rules('prestasi','Prestasi','required');
            $this->form_validation->set_rules('tgl_pelaksanaan','Tanggal Pelaksanaan','required');
            $this->form_validation->set_rules('deskripsi','Deskripsi','required');
			//$this->form_validation->set_rules('foto','Foto','required');
			//if (empty($_FILES['foto']['foto']))
			//{
			//	$this->form_validation->set_rules('foto', 'Foto', 'required');
			//}
            if ($this->form_validation->run()==FALSE){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tambah Data Gagal!</div>');
                $this->load->view("admin/prestasi/tambahprestasi",$data);
				//redirect('admin/prestasi/tambah');
            }
            else{
				$this->prestasi_model->tambahdataprestasi();
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tambah Data Berhasil!</div>');
                redirect('admin/prestasi','refresh');
            
            }
        }

        public function detail($id)
        {
            $data['title']='Detail Prestasi';
            $data['prestasi']= $this->prestasi_model->getprestasiByID($id);
            $this->load->view("admin/prestasi/detailprestasi",$data);
        }

        
        public function edit($id){
            $data ['title']='Form Edit Data Prestasi Mahasiswa';
            $this->form_validation->set_rules('nim','Nim','required');
            $this->form_validation->set_rules('prestasi','Prestasi','required');
            $this->form_validation->set_rules('tgl_pelaksanaan','Tanggal Pelaksanaan','required');
            $this->form_validation->set_rules('deskripsi','Deskripsi','required');
       
            if ($this->form_validation->run() == FALSE){
            #code...    
            $data['prestasi']= $this->prestasi_model->getprestasiByID($id);        
                $this->load->view("admin/prestasi/editprestasi", $data);
            }
            else{
            #code...
                $this->prestasi_model->ubahdataprestasi();
                $this->session->set_flashdata('flash-data','diedit');
                redirect('admin/prestasi','refresh');
            }
        }   

        public function hapus($id){
            $this->prestasi_model->hapusdataprestasi($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
            redirect('admin/prestasi','refresh');
        }

        
    public function laporanprestasi_pdf(){
        
        $this->load->library('pdf_prestasi');

        $data['prestasi'] = $this->cetak_model_prestasi->view();

        $this->pdf_prestasi->setPaper('A4', 'portrait');
        $this->pdf_prestasi->filename = "laporanprestasi.pdf";
        $this->pdf_prestasi->load_view('admin/prestasi/laporanprestasi',$data);
    }
}
    
    /* End of file mahasiswa.php */
    
?>