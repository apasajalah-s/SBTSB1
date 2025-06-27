<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;

class Tiket extends CI_Controller
{
    public function download($format, $booking_id)
    {
        $this->load->model('M_Match');
        $this->load->model('M_Booking');
        $booking = $this->M_Booking->get_by_id($booking_id);
        $utama = $this->M_Match->get_match_by_id($booking->match_id);

        $data = [
            'booking_id' => $booking_id,
            'utama' => $utama,
            'booking' => $booking,
            'zona_kursi' => $booking->zona_kursi,
            'qr_code_filename' => 'qr_' . $booking_id . '.png'
        ];

        $html = $this->load->view('v_konfirmasi', $data, TRUE);

        if ($format == 'pdf') {
            $this->load->library('pdf');

            $html = $this->load->view('v_tiket_pdf', $data, true);
            $this->pdf->loadHtml($html);
            $this->pdf->setPaper('A4', 'portrait');
            $this->pdf->render();
            $this->pdf->stream("tiket-$booking_id.pdf", array("Attachment" => true));
        } else {
            // Untuk PNG, arahkan ke html2canvas atau beritahu user untuk screenshot
            echo "PNG hanya bisa diunduh melalui tombol di halaman.";
        }
    }
}
