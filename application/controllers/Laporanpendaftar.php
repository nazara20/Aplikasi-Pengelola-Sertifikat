<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporanpendaftar extends CI_Controller
{
    /**
     * Class constructor method.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftaran_model', 'pendaftar');
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

        $this->db->select('*')->from('pendaftaran');

        $pendaftaran = $this->db->get()->result_array();

        $pendaftarNumber = $this->pendaftar->getNumberPendaftaran();

        page_title('LAPORAN DATA PENDAFTAR');
        print_view('laporan/laporanpendaftar/cetak', [
            'user' => $user,
            'pendaftarNumber' => $pendaftarNumber,
            'pendaftaran' => $pendaftaran
        ]);
    }
}
