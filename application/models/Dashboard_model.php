<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    public function total_ormawa()
    {
        return $this->db->count_all('ormawa');
    }

    public function total_pengurus()
    {
        return $this->db->count_all('pengurus');
    }

    public function kegiatan_bulan_ini()
    {
        $this->db->where('MONTH(tanggal)', date('m'));
        $this->db->where('YEAR(tanggal)', date('Y'));
        return $this->db->get('kegiatan')->num_rows();
    }
}
