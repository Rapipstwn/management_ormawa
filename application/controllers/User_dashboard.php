<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_dashboard extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->only_user(); // 🔐 khusus role user
    }

    public function index()
    {
        $this->load->view('layouts/main', [
            'content' => $this->load->view('user/dashboard', [], TRUE)
        ]);
    }
}
