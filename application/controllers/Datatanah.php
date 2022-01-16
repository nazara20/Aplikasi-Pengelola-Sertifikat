<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datatanah extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Datatanah_model', 'datatanah');
        if (currentUser() == null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda belum login, silahkan login terlebih dahulu. </div>');
            redirect('auth');
            
        }
    }

    public function index()
    {
        $data['title'] = 'BPN Data Tanah';
        $data['aktif'] = 'datatanah';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['datatanah'] = $this->datatanah->getAllDatatanah();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('datatanah/index', $data);
        $this->load->view('template/footer');
    }

   
}
