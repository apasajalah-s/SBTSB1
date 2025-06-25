<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konfirmasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Match');
    }

    public function index($id = null)
    {
        if ($id === null) {
            $utama = $this->M_Match->get_pertandingan_utama(); // fallback
            $id = $utama->match_id;
        }

        $utama = $this->M_Match->get_match_by_id($id);
        if (!$utama) {
            show_error('Data tidak ditemukan');
        }

        $data['utama'] = $utama;

        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
        $this->load->view('v_konfirmasi', $data);
        $this->load->view('layout/footers');
    }
}
