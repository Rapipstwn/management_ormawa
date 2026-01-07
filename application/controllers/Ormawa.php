<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ormawa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('login')) {
            redirect('Auth');
        }

        $this->load->model('Ormawa_model');
    }

    public function index()
    {
        $data['ormawa'] = $this->Ormawa_model->get_all();
        $this->load->view('ormawa/index', $data);
    }
}
