<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Booking extends CI_Model
{
    public function get_by_id($booking_id)
    {
        return $this->db->get_where('tb_booking', ['booking_id' => $booking_id])->row();
    }

    public function get_booking_by_id($booking_id)
    {
        return $this->db->get_where('tb_booking', ['booking_id' => $booking_id])->row();
    }

    public function get_kursi_by_nama($nama_kursi)
    {
        return $this->db->get_where('tb_seats', ['kursi' => $nama_kursi])->row();
    }
}
