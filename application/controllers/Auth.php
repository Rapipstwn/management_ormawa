<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
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
                redirect('dashboard');
            } else {
                $data['error'] = 'Username atau password salah';
            }
        }

        $this->load->view('auth/login');
    }

    public function register()
{
    if ($this->input->post()) {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // cek username sudah ada
        if ($this->User_model->check_username($username)) {
            $data['error'] = 'Username sudah digunakan';
        } else {
            $this->User_model->register([
                'username' => $username,
                'password' => md5($password),
                'role' => 'user'
            ]);

            redirect('auth');
        }
    }

    $this->load->view('auth/register', $data ?? []);
}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
