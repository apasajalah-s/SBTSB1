<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Match'); 
	}

	public function index()
	{
		$this->load->model('M_Match');

		$utama = $this->M_Match->get_pertandingan_utama();
		$jadwal = $this->M_Match->get_pertandingan_selanjutnya($utama->match_id); 

		$data['utama'] = $utama;
		$data['jadwal'] = $jadwal;

		$this->load->view('layout/headers');
		$this->load->view('layout/navigation');
		$this->load->view('v_home', $data);
		$this->load->view('layout/footers');
	}
}
