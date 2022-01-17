<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran_model extends CI_model
{
    public function getAllPendaftaran()
    {
        return $this->db->get('pendaftaran')->result_array();
    }

    public function tambahPendaftar($data)
    {

        $this->db->insert('pendaftaran', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }


    public function buat_kode()   {

        $this->db->select('RIGHT(pendaftaran.No_Pendaftaran	,4) as kode', FALSE);
        $this->db->order_by('No_Pendaftaran	','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('pendaftaran');      //cek dulu apakah ada sudah ada kode di tabel.    
        if($query->num_rows() <> 0){      
         //jika kode ternyata sudah ada.      
         $data = $query->row();      
         $kode = intval($data->kode) + 1;    
        }
        else {      
         //jika kode belum ada      
         $kode = 1;    
        }

        $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodejadi = "A-".$kodemax;    // hasilnya ODJ-9921-0001 dst.
        return $kodejadi;  
  }

  public function buat_kodesurat()   {

    $this->db->select('RIGHT(pendaftaran.No_SuratKuasa,4) as kode', FALSE);
    $this->db->order_by('No_SuratKuasa','DESC');    
    $this->db->limit(1);    
    $query = $this->db->get('pendaftaran');      //cek dulu apakah ada sudah ada kode di tabel.    
    if($query->num_rows() <> 0){      
     //jika kode ternyata sudah ada.      
     $data = $query->row();      
     $kode = intval($data->kode) + 1;    
    }
    else {      
     //jika kode belum ada      
     $kode = 1;    
    }

    $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
    $kodejadi = "BPN-2022-".$kodemax;    // hasilnya ODJ-9921-0001 dst.
    return $kodejadi;  
}
}
