<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporansps extends CI_Controller
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

        $this->db->select('*')->from('biaya');

        $biaya = $this->db->get()->result_array();
        $sumsps = $this->pembayaran->get_sumsps();

        page_title('Surat Perintah Setor');
        print_view('laporan/laporansps/cetak', [
            'user' => $user,
            'sumsps' => $sumsps,
            'biaya' => $biaya
        ]);
    }
}
