<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datatanah_model extends CI_model
{
    public function getAllDatatanah()
    {
        return $this->db->get('data_tanah')->result_array();
    }

    public function tambahDatatanah($data)
    {

        $this->db->insert('data_tanah', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }

        return false;
    }

    

    public function buat_kode()
    {

        $this->db->select('RIGHT(data_tanah.No_HAK,5) as kode', FALSE);
        $this->db->order_by('No_HAK	', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('data_tanah');      //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //jika kode ternyata sudah ada.      
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            //jika kode belum ada      
            $kode = 1;
        }

        $kodemax = str_pad($kode, 5, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodejadi = $kodemax;    // hasilnya ODJ-9921-0001 dst.
        return $kodejadi;
    }

    public function editDatatanah($data)
    {

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('data_tanah', $data);
    }

    public function getDatatanahbyId($id)
    {
        return $this->db->get_where('data_tanah', ['id' => $id])->row_array();
    }


    public function hapusDatatanah($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data_tanah');
    }
}
