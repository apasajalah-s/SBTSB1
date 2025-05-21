<?php
    class M_Login extends CI_Model {
        function __construct() {
            parent::__construct(); 
        }

        public function tb_user($username, $password) {
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            return $this->db->get('tb_user')->row();

            //row(); bentuk kembali dari database dalam bentuk 1 data
            //result(); bentuk kembali dari database dalam banyak data
        }
    }
?>