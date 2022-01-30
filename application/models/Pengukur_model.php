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

    public function editPengukur($data)
    {

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('surat_ukur', $data);
    }

    public function getPengukurbyId($id)
    {
        return $this->db->get_where('surat_ukur', ['id' => $id])->row_array();
    }

    public function hapusPengukur($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('surat_ukur');
    }

    public function editPetugasUkur($data)
    {

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('petugas_ukur', $data);
    }

    public function getPetugasUkurbyId($id)
    {
        return $this->db->get_where('petugas_ukur', ['id' => $id])->row_array();
    }

    public function hapusPetugasUkur($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('petugas_ukur');
    }


}
