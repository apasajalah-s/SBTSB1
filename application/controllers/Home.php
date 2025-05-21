<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
		$this->load->view('v_home');
        $this->load->view('layout/footers');
	}
}
