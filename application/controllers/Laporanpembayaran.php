<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporanpembayaran extends CI_Controller
{
    /**
     * Class constructor method.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembayaran_model', 'pembayaran');
        if (currentUser() == null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda belum login, silahkan login terlebih dahulu. </div>');
            redirect('auth');
        }
    }



    public function cetak()
    {
        $start = htmlspecialchars($this->input->get('s'));
        $end = htmlspecialchars($this->input->get('e'));
        $user = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->db->select('*')->from('pembayaran');

        $pembayaran = $this->db->get()->result_array();

        $this->db->select_sum('Jumlah_Biaya')->from('pembayaran');
        $query = $this->db->get()->result_array();

        $sum = $this->pembayaran->get_sum();


        page_title('LAPORAN DATA PEMBAYARAN');
        print_view('laporan/laporanpembayaran/cetak', [
            'user' => $user,
            'query' => $query,
            'sum' => $sum,
            'pembayaran' => $pembayaran
        ]);
    }
}
