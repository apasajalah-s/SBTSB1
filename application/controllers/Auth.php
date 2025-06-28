<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

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
        $this->session->sess_destroy();
        redirect('welcome');
    }
}
