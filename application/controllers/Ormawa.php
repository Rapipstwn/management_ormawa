<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ormawa extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->admin_only(); // 🔒 ADMIN ONLY
        $this->load->model('Ormawa_model');
    }

    public function index()
    {
        $data['ormawa'] = $this->Ormawa_model->get_all();
        $this->template->load('layouts/main', 'ormawa/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $this->Ormawa_model->insert([
                'nama_ormawa' => $this->input->post('nama_ormawa')
            ]);
            redirect('ormawa');
        }

        $this->template->load('layouts/main', 'ormawa/create');
    }
}
