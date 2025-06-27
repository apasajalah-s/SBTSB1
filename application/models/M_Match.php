<?php
class M_Match extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    public function insert_match($data)
    {
        return $this->db->insert('tb_match', $data);
    }

    public function get_match_by_id($id)
    {
        return $this->db->get_where('tb_match', ['match_id' => $id])->row();
    }


    public function get_pertandingan_utama() {
        $this->db->order_by('tanggal', 'ASC');
        $this->db->limit(1);
        return $this->db->get('tb_match')->row();
    }
    public function get_pertandingan_selanjutnya($skip_id)
    {
        $this->db->where('match_id !=', $skip_id);
        $this->db->order_by('tanggal', 'ASC');
        return $this->db->get('tb_match')->result();
    }
}

?>