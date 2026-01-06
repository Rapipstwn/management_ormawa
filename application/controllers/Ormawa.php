<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ormawa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ormawa_model');
    }

    public function index()
    {
        $data['ormawa'] = $this->Ormawa_model->get_all();
        $this->load->view('ormawa/index', $data);
    }

    public function tambah()
    {
        if ($this->input->post()) {
            $data = [
                'nama_ormawa' => $this->input->post('nama_ormawa')
            ];
            $this->Ormawa_model->insert($data);
            redirect('ormawa');
        }
        $this->load->view('ormawa/tambah');
    }
    public function hapus($id)
    {
    $this->Ormawa_model->delete($id);
    redirect('ormawa');
    }
    public function edit($id)
{
    if ($this->input->post()) {
        $data = [
            'nama_ormawa' => $this->input->post('nama_ormawa')
        ];
        $this->Ormawa_model->update($id, $data);
        redirect('ormawa');
    }

    $data['ormawa'] = $this->Ormawa_model->get_by_id($id);
    $this->load->view('ormawa/edit', $data);
}
public function __construct()
{
    parent::__construct();
    $this->load->model('Ormawa_model');
    $this->load->library('session');

    if (!$this->session->userdata('login')) {
        redirect('auth/login');
    }
}


}
