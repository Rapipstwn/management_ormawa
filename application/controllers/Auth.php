<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function login()
    {
        $this->load->model('User_model');

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->User_model->login($email, $password);

        if ($user) {
            $this->session->set_userdata('user', $user);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error', 'Login gagal');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
