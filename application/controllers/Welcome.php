<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Login');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}

	public function auth()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$user = $this->M_Login->user($username, $password);
		if ($user) {
			$this->session->set_userdata('username', $user->username);
			$this->session->set_userdata('user_id', $user->user_id);
			redirect('home'); 
		} else {
			redirect('Welcome');
		}
	}
}

