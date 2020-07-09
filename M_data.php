<?php

class M_data extends CI_Model{
    public function data_pengguna(){
        $query = $this->db->query("SELECT * FROM tb_pengguna");
        return $query->result();
    }
}

    
?>