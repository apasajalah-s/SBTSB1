<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Match');
        $this->load->database();
    }

    public function index1($id = null) {
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
        $this->load->view('v_pembayaran1', $data);
        $this->load->view('layout/footers');
    }

    public function index($match_id = null, $kursi = null)
    {
        
        if (!$match_id || !$kursi) {
            show_404();
        }

        $utama = $this->M_Match->get_match_by_id($match_id);
        $seat = $this->db->get_where('tb_seats', ['kursi' => $kursi])->row();

        if (!$utama || !$seat) {
            show_error('Data tidak ditemukan.');
        }

        $warna = [
            'A' => '#FF0909',
            'B' => '#FEAA00',
            'C' => '#2E72FF',
            'VIP' => '#D9D9D9',
            'D' => '#FF36BC',
            'E' => '#00CAC3'
        ];
        $seat->warna = $warna[$kursi] ?? '#ccc';

        // Kirim data ke halaman pembayaran
        $data['utama'] = $utama;
        $data['kursi'] = $seat;
        

        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
        $this->load->view('v_pembayaran', $data);
        $this->load->view('layout/footers');
    }

    public function simpan()
    {
        // Upload config
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']      = 307200; // 300MB
        $config['encrypt_name']  = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file_bukti')) {
            echo "Upload gagal: " . $this->upload->display_errors();
            return;
        }

        $upload_data = $this->upload->data();

        // Simpan ke tb_booking
        $booking_data = [
            'match_id'        => $this->input->post('match_id'),
            'nama'            => $this->input->post('nama'),
            'zona_kursi'      => $this->input->post('zona'),
            'tanggal_booking' => date('Y-m-d'),
        ];
        $this->db->insert('tb_booking', $booking_data);
        $booking_id = $this->db->insert_id();


        // Simpan ke tb_payments
        $payment_data = [
            'booking_id'        => $booking_id,
            'nama'              => $this->input->post('nama'),
            'email'             => $this->input->post('email'),
            'file_bukti'        => $upload_data['orig_name'],
            'metode_pembayaran' => $this->input->post('metode_pembayaran'),
            'tanggal_pembayaran' => date('Y-m-d'),
            'jumlah'            => $this->input->post('jumlah'),
        ];
        $this->db->insert('tb_payments', $payment_data);
        $email = $this->input->post('email');

        // Validasi format email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->session->set_flashdata('error', 'Email tidak valid.');
            redirect('konfirmasi/index/' . $booking_id);
            return;
        }

        // Validasi apakah email terdaftar
        $user = $this->db->get_where('tb_user', ['email' => $email])->row();
        if (!$user) {
            $this->session->set_flashdata('error', 'Email tidak terdaftar. Silakan daftar terlebih dahulu.');
            redirect('konfirmasi/index/' . $booking_id);
            return;
        }

        // Redirect ke halaman konfirmasi
        redirect('konfirmasi/index/' . $booking_id);
    }
}
