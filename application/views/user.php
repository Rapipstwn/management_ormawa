<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    private $table = 'user'; // tabel di database

    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }

    public function get_by_induk($induk)
    {
        return $this->db->get_where($this->table, ['induk' => $induk])->row();
    }

    public function update($induk, $data)
    {
        $this->db->where('induk', $induk);
        return $this->db->update($this->table, $data);
    }

    public function delete($induk)
    {
        $this->db->where('induk', $induk);
        return $this->db->delete($this->table);
    }
}
