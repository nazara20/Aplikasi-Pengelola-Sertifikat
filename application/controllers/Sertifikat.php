<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sertifikat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sertifikat_model', 'sertifikat');
        $this->load->model('Datatanah_model', 'datatanah');
        if (currentUser() == null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda belum login, silahkan login terlebih dahulu. </div>');
            redirect('auth');
            
        }
    }

    public function index()
    {
        $data['title'] = 'BPN Data Sertifikat';
        $data['aktif'] = 'sertifikat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['sertifikat'] = $this->sertifikat->getAllSertifikat();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('sertifikat/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['kodeuniksertifikat'] = $this->sertifikat->buat_kode();
        $data['title'] = 'BPN Tambah Data Sertifikat';
        $data['datatanahselect'] = $this->datatanah->getAllDatatanah();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('No_HAK', 'No HAK', 'required|trim');
        $this->form_validation->set_rules('Tgl_Pengesahan', 'Tgl_Pengesahan', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('sertifikat/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                "No_Sertifikat" => $this->input->post('No_Sertifikat', true),
                "No_HAK" => $this->input->post('No_HAK', true),
                "Tgl_Pengesahan" => $this->input->post('Tgl_Pengesahan', true),
            ];
            if ($this->sertifikat->tambahSertifikat($data)) {
                $this->session->set_flashdata('message', 'Data Sertifikat Berhasil ditambahkan');
                redirect('sertifikat');
            } else {
                $this->session->set_flashdata('message', 'Data Sertifikat Gagal ditambahkan');
                redirect('sertifikat');
            }
        }
    }
}
