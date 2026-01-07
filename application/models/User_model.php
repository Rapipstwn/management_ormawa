<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function login($email, $password)
    {
        return $this->db
            ->where('email', $email)
            ->where('password', md5($password))
            ->get('users')
            ->row();
    }
}
