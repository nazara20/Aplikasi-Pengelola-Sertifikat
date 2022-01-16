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
}
