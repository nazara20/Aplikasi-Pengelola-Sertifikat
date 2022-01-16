<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sertifikat_model extends CI_model
{
    public function getAllSertifikat()
    {
        return $this->db->get('sertifikat')->result_array();
    }
}
