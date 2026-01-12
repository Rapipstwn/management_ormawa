<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function is_login()
{
    $ci = get_instance();
    return $ci->session->userdata('login');
}
