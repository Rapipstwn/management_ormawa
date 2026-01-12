<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('login')) {
            redirect('auth');
        }
    }

    protected function only_admin()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('user_dashboard');
        }
    }

    protected function only_user()
    {
        if ($this->session->userdata('role') !== 'user') {
            redirect('dashboard');
        }
    }
}
