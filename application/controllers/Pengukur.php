<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengukur extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengukur_model', 'pengukur');
        if (currentUser() == null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda belum login, silahkan login terlebih dahulu. </div>');
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'BPN Data Pengukur';
        $data['aktif'] = 'suratukur';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['pengukur'] = $this->pengukur->getAllPengukur();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('pengukur/index', $data);
        $this->load->view('template/footer');
    }

    public function petugasukur()
    {
        $data['title'] = 'BPN Data Pengukur';
        $data['aktif'] = 'petugasukur';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['petugas'] = $this->pengukur->getAllPetugasUkur();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('pengukur/petugasukur', $data);
        $this->load->view('template/footer');
    }
}
