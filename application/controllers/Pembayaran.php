<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
        $this->load->view('v_pembayaran');
        $this->load->view('layout/footers');
    }

    public function entri()
    {
        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
        $this->load->view('v_pengembalian_entri');
        $this->load->view('layout/footers');
    }
}
