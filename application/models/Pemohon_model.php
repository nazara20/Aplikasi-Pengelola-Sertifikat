<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemohon_model extends CI_model
{
    public function getAllPemohon()
    {
        return $this->db->get('pemohon')->result_array();
    }

    public function tambahPemohon($data)
    {

        $this->db->insert('pemohon', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }

        return false;
    }

    
}
