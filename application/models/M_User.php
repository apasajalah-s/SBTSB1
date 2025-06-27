<?php
class M_User extends CI_Model
{
    public function insert($data)
    {
        return $this->db->insert('tb_user', $data); // Sesuaikan dengan nama tabel
    }
}
