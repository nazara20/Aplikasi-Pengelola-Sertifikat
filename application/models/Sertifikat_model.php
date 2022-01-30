<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sertifikat_model extends CI_model
{
    public function getAllSertifikat()
    {
        return $this->db->get('sertifikat')->result_array();
    }

    public function tambahSertifikat($data)
    {

        $this->db->insert('sertifikat', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }

    public function buat_kode()   {

        $this->db->select('RIGHT(sertifikat.No_Sertifikat,3) as kode', FALSE);
        $this->db->order_by('No_Sertifikat','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('sertifikat');      //cek dulu apakah ada sudah ada kode di tabel.    
        if($query->num_rows() <> 0){      
         //jika kode ternyata sudah ada.      
         $data = $query->row();      
         $kode = intval($data->kode) + 1;    
        }
        else {      
         //jika kode belum ada      
         $kode = 1;    
        }

        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodejadi = "BPN/BJM/2022/".$kodemax;    // hasilnya ODJ-9921-0001 dst.
        return $kodejadi;  
  }

  public function editSertifikat($data)
  {

      $this->db->where('id', $this->input->post('id'));
      $this->db->update('sertifikat', $data);
  }

  public function getSertifikatbyId($id)
  {
      return $this->db->get_where('sertifikat', ['id' => $id])->row_array();
  }

  public function hapusSertifikat($id)
  {
      $this->db->where('id', $id);
      $this->db->delete('sertifikat');
  }


}
