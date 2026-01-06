<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function login($username, $password)
    {
        return $this->db->get_where('user', [
            'username' => $username,
            'password' => md5($password)
        ])->row();
    }
}
