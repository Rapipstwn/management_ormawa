<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
    }

    public function login()
    {
        if ($this->input->post()) {
            $user = $this->User_model->login(
                $this->input->post('username'),
                $this->input->post('password')
            );

            if ($user) {
                $this->session->set_userdata([
                    'login' => true,
                    'username' => $user->username,
                    'role' => $user->role
                ]);
                redirect('ormawa');
            } else {
                $data['error'] = 'Username atau password salah';
            }
        }
        $this->load->view('login', @$data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
