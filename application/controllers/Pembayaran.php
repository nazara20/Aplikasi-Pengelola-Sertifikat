<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembayaran_model', 'pembayaran');
        $this->load->model('Pendaftaran_model', 'pendaftaran');
        if (currentUser() == null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda belum login, silahkan login terlebih dahulu. </div>');
            redirect('auth');
            
        }
    }

    public function index()
    {
        $data['title'] = 'BPN Pembayaran';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['pembayaran'] = $this->pembayaran->getAllPembayaran();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('pembayaran/index', $data);
        $this->load->view('template/footer');
    }

    public function biaya()
    {
        $data['title'] = 'BPN Biaya';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['biaya'] = $this->pembayaran->getAllBiaya();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('pembayaran/biaya', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['kodeuniksps'] = $this->pembayaran->buat_kodesps();
        $data['title'] = 'BPN Tambah Data Pembayaran';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['pendaftaranselect'] = $this->pendaftaran->getAllPendaftaran();
        $this->form_validation->set_rules('No_SPS', 'No_SPS', 'required|trim');
        $this->form_validation->set_rules('No_Pendaftaran', 'No_Pendaftaran', 'required|trim');
        $this->form_validation->set_rules('Jumlah_Biaya', 'Jumlah_Biaya', 'required|trim');
        $this->form_validation->set_rules('Terbilang', 'Terbilang', 'required|trim');
        $this->form_validation->set_rules('Tgl_SPS', 'Tgl_SPS', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('pembayaran/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                "No_SPS" => $this->input->post('No_SPS', true),
                "No_Pendaftaran" => $this->input->post('No_Pendaftaran', true),
                "Jumlah_Biaya" => $this->input->post('Jumlah_Biaya', true),
                "Terbilang" => $this->input->post('Terbilang', true),
                "Tgl_SPS" => $this->input->post('Tgl_SPS', true),
            ];
            if ($this->pembayaran->tambah($data)) {
                $this->session->set_flashdata('message', 'Data Pembayaran Berhasil ditambahkan');
                redirect('pembayaran');
            } else {
                $this->session->set_flashdata('message', 'Data Pembayaran Gagal ditambahkan');
                redirect('pembayaran');
            }
        }
    }


    public function tambahbiaya()
    {
        $data['title'] = 'BPN Tambah Biaya';
        $data['kodeunik'] = $this->pembayaran->buat_kode();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('kodebiaya', 'Kode Biaya', 'trim');
        $this->form_validation->set_rules('namabiaya', 'Nama Biaya', 'required|trim');
        $this->form_validation->set_rules('biaya', 'Biaya', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('pembayaran/tambahbiaya', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                "Kode_Biaya" => $this->input->post('kodebiaya', true),
                "Nama_Biaya" => $this->input->post('namabiaya', true),
                "Biaya	" => $this->input->post('biaya', true),
            ];
            if ($this->pembayaran->tambahBiaya($data)) {
                $this->session->set_flashdata('message', 'Biaya Berhasil DiTambahkan');
                redirect('pembayaran/biaya');
            } else {
                $this->session->set_flashdata('message', 'Biaya Gagal ditambahkan');
                redirect('pembayaran/biaya');
            }
        }
    }

}
