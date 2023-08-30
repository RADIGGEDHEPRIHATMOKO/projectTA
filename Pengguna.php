<?php

class Pengguna Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Pengguna_model');
    }
    
    public function index()
    {
        $data['pengguna'] = $this->Pengguna_model->getData();
        $this->load->view('admin/templates/menu.php');
        $this->load->view('admin/pengguna/view.php', $data);
        $this->load->view('admin/templates/footer.php');

    }

    public function form_pengguna()
    {
        $this->load->view('admin/templates/menu.php');
        $this->load->view('admin/pengguna/form.php');
        $this->load->view('admin/templates/footer.php');
    }
}