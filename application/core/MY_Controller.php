<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    protected $user;

    public function __construct()
    {
        parent::__construct();
        $this->user = $this->session->userdata('user');
    }

    protected function requireLogin()
    {
        if (!$this->user) {
            redirect('auth');
        }
    }
}
