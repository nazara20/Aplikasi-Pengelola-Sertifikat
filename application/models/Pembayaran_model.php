<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran_model extends CI_model
{
    public function getAllPembayaran()
    {
        return $this->db->get('pembayaran')->result_array();
    }

    public function getAllBiaya()
    {
        return $this->db->get('biaya')->result_array();
    }

    public function tambah($data)
    {

        $this->db->insert('pembayaran', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }

        return false;
    }

    public function tambahBiaya($data)
    {

        $this->db->insert('biaya', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }

        return false;
    }
    
    public function buat_kodesps()   {

        $this->db->select('RIGHT(pembayaran.No_SPS,7) as kode', FALSE);
        $this->db->order_by('No_SPS','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('pembayaran');      //cek dulu apakah ada sudah ada kode di tabel.    
        if($query->num_rows() <> 0){      
         //jika kode ternyata sudah ada.      
         $data = $query->row();      
         $kode = intval($data->kode) + 1;    
        }
        else {      
         //jika kode belum ada      
         $kode = 1;    
        }

        $kodemax = str_pad($kode, 5, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodejadi = "2022/01/".$kodemax;    // hasilnya ODJ-9921-0001 dst.
        return $kodejadi;  
  }

    public function buat_kode()   {

        $this->db->select('RIGHT(biaya.Kode_Biaya,4) as kode', FALSE);
        $this->db->order_by('Kode_Biaya','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('biaya');      //cek dulu apakah ada sudah ada kode di tabel.    
        if($query->num_rows() <> 0){      
         //jika kode ternyata sudah ada.      
         $data = $query->row();      
         $kode = intval($data->kode) + 1;    
        }
        else {      
         //jika kode belum ada      
         $kode = 1;    
        }

        $kodemax = str_pad($kode, 5, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodejadi = "2022".$kodemax;    // hasilnya ODJ-9921-0001 dst.
        return $kodejadi;  
  }
}
