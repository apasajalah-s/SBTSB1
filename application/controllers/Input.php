<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
        $this->load->view('v_input');
        $this->load->view('layout/footers');
    }
}
