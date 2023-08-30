<?php

class Pengguna_model Extends CI_Model{

    public function getData()
    {
        return $this->db->get('admin')->result();
    }
}