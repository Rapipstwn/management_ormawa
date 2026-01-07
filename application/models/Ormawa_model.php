<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ormawa_model extends CI_Model {

    protected $table = 'ormawa';

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }
}
