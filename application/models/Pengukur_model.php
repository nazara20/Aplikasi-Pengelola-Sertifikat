<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengukur_model extends CI_model
{
    public function getAllPengukur()
    {
        return $this->db->get('surat_ukur')->result_array();
    }

    public function getAllPetugasUkur()
    {
        return $this->db->get('petugas_ukur')->result_array();
    }
}
