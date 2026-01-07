<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->requireLogin();
        $this->load->library('Template');
    }

    public function index()
    {
        $data['user'] = $this->user;
        $this->template->render('dashboard/index', $data);
    }
}
