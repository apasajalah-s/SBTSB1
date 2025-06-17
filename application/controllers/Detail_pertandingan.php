<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_pertandingan extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
        $this->load->view('v_detail_pertandingan');
        $this->load->view('layout/footers');
    }

    public function entri()
    {
        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
        $this->load->view('v_peminjaman_entri');
        $this->load->view('layout/footers');
    }
}
