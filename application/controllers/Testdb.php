<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testdb extends CI_Controller {

    public function index()
    {
        $query = $this->db->get('ormawa');
        echo "Jumlah data ormawa: " . $query->num_rows();
    }
}
