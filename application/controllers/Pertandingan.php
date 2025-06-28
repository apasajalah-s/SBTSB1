<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pertandingan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Match', 'Match_model');
    }

    public function index()
    {
        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
        $this->load->view('v_match');
        $this->load->view('layout/footers');
    }

    public function simpan()
    {
        $data = array(
            'tim_tuan_rumah' => $this->input->post('tim_tuan_rumah'),
            'tim_tamu'   => $this->input->post('tim_tamu'),
            'tanggal'    => $this->input->post('tanggal'),
            'waktu'      => $this->input->post('waktu'),
            'lokasi_stadion'     => $this->input->post('lokasi_stadion'),
        );

        $this->Match_model->insert_match($data);
        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
        $this->load->view('v_match');
        $this->load->view('layout/footers');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 70bf2f1e51b2677d8fa0e346834c3cc0f9fd9273
