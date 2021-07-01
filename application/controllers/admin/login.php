<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class login extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('login_model');
        $this->load->model('kemahasiswaan_model');
        //$this->load->library('session');
      
    }
    
    public function index()
    {
        $data ['title']='Login';
        $this->load->model('login_model');
        $this->load->view('admin/_partials/head', $data);
        $this->load->view('admin/login/index');
        
        $this->load->view('admin/_partials/js');
    }

    public function proses_login()
    {
        $username=htmlspecialchars($this->input->post('uname1'));
        $password=htmlspecialchars($this->input->post('pwd1'));
        $cek_login=$this->login_model->login($username, $password);

        if($cek_login)
        {
            foreach($cek_login as $row);
                #code...
                $this->session->set_userdata('Mahasiswa',$row->username);
                $this->session->set_userdata('Level',$row->level);
                $this->session->set_userdata('Active',$row->active);
                $this->session->set_userdata('NIM',$row->nim);
            if ($this->session->userdata('Level') == 'mahasiswa' && $this->session->userdata('Active') == 0) {
                # code...
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun belum diverifikasi!</div>');
                redirect('admin/login', 'refresh');
            } 
            else if($this->session->userdata('Level') == 'mahasiswa'){
                // $nim=$this->session->userdata('NIM');
                // $this->kemahasiswaan_model->getmahasiswaByID($nim);
                redirect('user/mahasiswa');
            }
            else if($this->session->userdata('Level') == 'admin'){
                redirect('admin/mahasiswa');
            }

            
            // else if($this->session->userdata('Level') == 'Pegawai' && $this->session->userdata('Active')== 1){
            //     redirect('user/pegawai');
            // } 
            // else if($this->session->userdata('Level') == 'Pegawai' && $this->session->userdata('Active')== 0){
            //     $this->session->set_flashdata('message', 'Account must be verified!');
            //     redirect('admin/login   ','refresh');
            // }
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau Password Salah!</div>');
            redirect('admin/login', 'refresh');
        }
    }


    public function logout(){
        $this->session->sess_destroy();
        redirect('login','refresh');
    }
}
  /* End of file Login.php */

?>