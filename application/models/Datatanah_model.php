<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datatanah_model extends CI_model
{
    public function getAllDatatanah()
    {
        return $this->db->get('data_tanah')->result_array();
    }
}
