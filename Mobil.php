<?php

class Mobil Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Mobil_model');
    }

    public function index()
    {
        $this->load->view('admin/templates/menu');
        $this->load->view('admin/mobil/view');
        $this->load->view('admin/templates/footer');
    }

    public function form()
    {
        $this->load->view('admin/templates/menu');
        $this->load->view('admin/mobil/tambah');
        $this->load->view('admin/templates/footer');
    }
}