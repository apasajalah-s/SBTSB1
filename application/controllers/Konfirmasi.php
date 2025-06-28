<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konfirmasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Match');
<<<<<<< HEAD
        $this->load->model('M_Booking');
        $this->load->library('ciqrcode');
    }

    public function index1($id = null)
=======
    }

    public function index($id = null)
>>>>>>> 70bf2f1e51b2677d8fa0e346834c3cc0f9fd9273
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
<<<<<<< HEAD
        $this->load->view('v_konfirmasi1', $data);
        $this->load->view('layout/footers');
    }

    public function index($booking_id = null, $kursi = null)
    {
        
        if (!$booking_id) {
            show_404();
        }

        // Cek apakah booking_id dan kursi valid
        $booking = $this->M_Booking->get_booking_by_id($booking_id);
        if (!$booking) {
            show_error('Booking tidak ditemukan.');
        }

        // Jika kursi tidak dikirim dari URL, ambil dari data booking
        if (!$kursi) {
            $kursi = $booking->zona_kursi; // atau $booking->kursi, sesuaikan dengan nama kolom
        }
            
        // Cek apakah kursi valid
        $seat = $this->M_Booking->get_kursi_by_nama($kursi);
        if (!$seat) {
            show_error('Kursi tidak ditemukan.');
        }

        // Ambil data pertandingan utama
        $utama = $this->M_Match->get_match_by_id($booking->match_id);
        if (!$utama) {
            show_error('Pertandingan tidak ditemukan.');
        }
    
        // Ambil data booking dan pertandingan
        $booking = $this->db->get_where('tb_booking', ['booking_id' => $booking_id])->row();
        if (!$booking) show_404();

        $utama = $this->M_Match->get_match_by_id($booking->match_id);
        if (!$utama) show_404();

        // Generate QR Code
        $qr_text = "Nama    : " . $booking->nama . chr(10)
                 . "Zona    : " . strtoupper($booking->zona_kursi) . chr(10)
                 . "Tanggal : " . date('d F Y', strtotime($booking->tanggal_booking));



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

        $qr_filename = 'qr_' . $booking_id . '.png';
        $params['data'] = $qr_text;
        $params['level'] = 'H';
        $params['size'] = 10;
        $params['savename'] = FCPATH . 'assets/qr/' . $qr_filename;
        $this->ciqrcode->generate($params);

        $kursi = $this->M_Booking->get_kursi_by_nama($booking->zona_kursi);

        // Kirim ke view
        $data['utama'] = $utama;
        $data['zona_kursi'] = $booking->zona_kursi;
        $data['booking_id'] = $booking_id;
        $data['qr_code_filename'] = $qr_filename;
        $data['kursi'] = $seat;
        $data['booking'] = $booking;

        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
        $this->load->view('v_konfirmasi', $data);
        $this->load->view('layout/footers');
        
=======
        $this->load->view('v_konfirmasi', $data);
        $this->load->view('layout/footers');
>>>>>>> 70bf2f1e51b2677d8fa0e346834c3cc0f9fd9273
    }
}
