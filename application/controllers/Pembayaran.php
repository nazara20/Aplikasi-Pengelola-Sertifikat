<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembayaran_model', 'pembayaran');
        if (currentUser() == null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda belum login, silahkan login terlebih dahulu. </div>');
            redirect('auth');
            
        }
    }

    public function index()
    {
        $data['title'] = 'BPN Pembayaran';
        $data['aktif'] = 'datapembayaran';
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
        $data['aktif'] = 'biaya';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['biaya'] = $this->pembayaran->getAllBiaya();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('pembayaran/biaya', $data);
        $this->load->view('template/footer');
    }
}
