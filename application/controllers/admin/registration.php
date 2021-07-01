<?php

defined('BASEPATH') or exit('No direct script access allowed');

class registration extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->model('login_model');
    }

    public function index()
    {
        $data['title'] = 'Registration';
        $this->load->view('admin/_partials/head', $data);
        $this->load->view('admin/login/register');
    }

    public function register()
    {
        // $nim=$this->input->post("nim", true);
        // $this->nim_exists($nim);

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'callback_nim_exists');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration';
            $this->load->view('admin/_partials/head', $data);
            $this->load->view("admin/login/register");
        } else {
            $this->login_model->register();
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Harus diverifikasi sebelum digunakan!</div>');
            redirect('admin/login', 'refresh');
        }
    }

    function nim_exists($nim)
    {
        // $this->login_model->nim_exists($key);
        $this->db->select('nim');
        $this->db->from('mahasiswa');
        $this->db->where('nim', $nim);
        // $query=$this->db->get();

        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            $this->form_validation->set_message('nim_exists', 'Please enter an existing NIM');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}

/* End of file register.php */
