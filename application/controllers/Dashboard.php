<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->only_admin(); // ✅ sekarang VALID
        $this->load->model('Dashboard_model');
    }

    public function index()
    {
        $data['total_ormawa'] = $this->Dashboard_model->total_ormawa();
        $data['total_pengurus'] = $this->Dashboard_model->total_pengurus();
        $data['kegiatan_bulan_ini'] = $this->Dashboard_model->kegiatan_bulan_ini();

        $this->load->view('layouts/main', [
            'content' => $this->load->view('dashboard/index', $data, TRUE)
        ]);
    }
}
