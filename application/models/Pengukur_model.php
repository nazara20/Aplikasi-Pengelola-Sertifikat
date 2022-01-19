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

    public function tambahPetugasUkur($data)
    {

        $this->db->insert('petugas_ukur', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }

        return false;
    }

    public function tambah($data)
    {

        $this->db->insert('surat_ukur', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }

        return false;
    }
}
