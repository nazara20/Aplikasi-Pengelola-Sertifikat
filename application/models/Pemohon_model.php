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

    public function editPemohon($data)
    {

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pemohon', $data);
    }

    public function getPemohonbyId($id)
    {
        return $this->db->get_where('pemohon', ['id' => $id])->row_array();
    }

    public function hapusPemohon($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pemohon');
    }

    
}
