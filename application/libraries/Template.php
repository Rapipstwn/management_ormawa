<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template {

    public function render($view, $data = [])
    {
        $CI = &get_instance();

        $data['content'] = $CI->load->view($view, $data, TRUE);
        $CI->load->view('layouts/main', $data);
    }
}
