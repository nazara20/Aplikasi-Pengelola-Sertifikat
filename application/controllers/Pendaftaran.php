<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftaran_model', 'pendaftaran');
        $this->load->model('Pembayaran_model', 'pembayaran');
        $this->load->model('Pemohon_model', 'pemohon');
        if (currentUser() == null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda belum login, silahkan login terlebih dahulu. </div>');
            redirect('auth');
            
        }
    }

    public function index()
    {
        $data['title'] = 'BPN Pendaftaran';
        $data['aktif'] = 'datapendaftar';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['pendaftaran'] = $this->pendaftaran->getAllPendaftaran();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('pendaftaran/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['kodeunikdaftar'] = $this->pendaftaran->buat_kode();
        $data['kodeuniksurat'] = $this->pendaftaran->buat_kodesurat();
        $data['title'] = 'BPN Tambah Data Pendaftaran';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['biayaselect'] = $this->pembayaran->getAllBiaya();
        $data['pemohonselect'] = $this->pemohon->getAllPemohon();
        $this->form_validation->set_rules('noktp', 'No KTP', 'required|trim');
        $this->form_validation->set_rules('noktpkuasa', 'No KTP(Kuasa)', 'required|trim|min_length[12]', [
            'min_length' => 'No KTP terlalu pendek!'
        ]);
        $this->form_validation->set_rules('kodebiaya', 'Kode Biaya', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('pendaftaran/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                "No_Pendaftaran	" => $this->input->post('nopendaftaran', true),
                "No_KTP" => $this->input->post('noktp', true),
                "No_KTPkuasa" => $this->input->post('noktpkuasa', true),
                "Kode_Biaya" => $this->input->post('kodebiaya', true),
                "No_SuratKuasa" => $this->input->post('nosuratkuasa', true),
                "Tgl_SuratKuasa" => $this->input->post('tanggalsuratkuasa', true),
                "Tgl_Pendaftaran" => date('Y-m-d'),
            ];
            if ($this->pendaftaran->tambahPendaftar($data)) {
                $this->session->set_flashdata('message', 'Pendaftaran Berhasil');
                redirect('pendaftaran');
            } else {
                $this->session->set_flashdata('message', 'Pendaftaran Gagal');
                redirect('pendaftaran');
            }
        }
    }
   
}
