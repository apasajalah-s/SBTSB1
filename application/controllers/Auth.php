<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
<<<<<<< HEAD
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
=======

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Login'); // pastikan model login kamu ada
    }

    public function index() // Halaman login
    {
        $this->load->view('Welcome'); // ganti sesuai nama file view login kamu
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Cek data login (ini contoh sederhana, sesuaikan dengan modelmu)
        $user = $this->M_Login->cek_login($username, $password); // pastikan fungsi ini ada

        if ($user) {
            // Simpan data ke session
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('username', $user->username); // jika kamu mau simpan nama user

            redirect('home'); // arahkan ke halaman utama setelah login
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah.');
            redirect('auth');
        }
    }

    public function logout()
    {
>>>>>>> 70bf2f1e51b2677d8fa0e346834c3cc0f9fd9273
        $this->session->sess_destroy();
        redirect('welcome');
    }
}
