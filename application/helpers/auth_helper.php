<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function user()
{
    $CI = &get_instance();
    return $CI->session->userdata('user');
}

function is_login()
{
    return user() !== null;
}
