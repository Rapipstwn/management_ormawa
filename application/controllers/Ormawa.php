<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ormawa extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->requireLogin();
        $this->load->library('Template');
        $this->load->model('Ormawa_model');
    }

    public function index()
    {
        $data['ormawa'] = $this->Ormawa_model->getAll();
        $this->template->render('ormawa/index', $data);
    }

    public function create()
    {
        $this->template->render('ormawa/create');
    }

    public function store()
    {
        $this->Ormawa_model->insert([
            'nama' => $this->input->post('nama'),
            'ketua' => $this->input->post('ketua'),
            'status' => 'aktif'
        ]);

        redirect('ormawa');
    }
}
