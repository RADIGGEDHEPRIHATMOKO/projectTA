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

    public function simpan()
    {
        $config['upload_path']          = 'assets/images/pengguna';
        $config['allowed_types']        = 'img|jpg|png';
        $config['max_size']             = 1024;
        $this->load->library('upload', $config);
        $this->upload->do_upload('poto');
        $file_name = $this->upload->data();

        $data = array(
            'nama_admin'    => $this->input->post('nama_admin'),
            'email'         => $this->input->post('email'),
            'password'      => md5($this->input->post('password')),
            'poto'          => $file_name['file_name']
        );

        $simpan = $this->db->insert('admin', $data);
        if($simpan = true){
            $this->session->set_flashdata('info', 'Data berhasil disimpan');
            redirect('administrator/Pengguna');
        }else{
            redirect('administrator/Pengguna/form_pengguna');
        }
    }
}