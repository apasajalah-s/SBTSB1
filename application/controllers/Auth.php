<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
    }

    public function register()
    {
        $this->load->view('v_register');
    }

    public function register_action()
    {
        $data = [
            'Nama'     => $this->input->post('nama', true),
            'username' => $this->input->post('username', true),
            'password' => $this->input->post('password'),
            'email'    => $this->input->post('email', true),
            'no_hp'    => $this->input->post('no_hp', true)
        ];

        $this->M_User->insert($data);
        redirect('welcome'); // Ubah ke login jika ada
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('welcome');
    }
}
