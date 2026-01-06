<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ormawa_model extends CI_Model {

    public function get_all()
    {
        return $this->db->get('ormawa')->result();
    }

    public function insert($data)
    {
        return $this->db->insert('ormawa', $data);
    }

    public function delete($id)
    {
        return $this->db->where('id_ormawa', $id)->delete('ormawa');
    }
    public function get_by_id($id)
    {
    return $this->db->get_where('ormawa', ['id_ormawa' => $id])->row();
    }

    public function update($id, $data)
    {
    return $this->db->where('id_ormawa', $id)->update('ormawa', $data);
    }
   

}
