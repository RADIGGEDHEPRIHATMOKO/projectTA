<?php

class Pengguna_model Extends CI_Model{

    public function getData()
    {
        return $this->db->get('admin')->result();
    }

    public function edit($id_admin)
    {
        $this->db->where('id_admin', $id_admin);
        return $this->db->get('admin')->row_array();
    }
}