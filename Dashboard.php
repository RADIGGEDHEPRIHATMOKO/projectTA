<?php

class Dashboard extends CI_Controller{

    public function index()
    {
        $this->load->view('admin/templates/menu');
        $this->load->view('admin/templates/footer');
    }
    
}