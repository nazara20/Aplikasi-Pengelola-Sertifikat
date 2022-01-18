<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemohon extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pemohon_model', 'pemohon');
        if (currentUser() == null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda belum login, silahkan login terlebih dahulu. </div>');
            redirect('auth');
            
        }
    }

    public function index()
    {
        $data['title'] = 'BPN Data Pemohon';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['pemohon'] = $this->pemohon->getAllPemohon();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('pemohon/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'BPN Tambah Data Pemohon';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('noktp', 'No KTP', 'required|trim|min_length[12]', [
            'min_length' => 'No KTP terlalu pendek!'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tempatlahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tanggallahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('umur', 'Umur', 'required|trim');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('nohp', 'No HP', 'required|trim|min_length[8]', [
            'min_length' => 'No HP terlalu pendek!'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('pemohon/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                "No_KTP" => $this->input->post('noktp', true),
                "Nama_Pemohon" => $this->input->post('nama', true),
                "tempat_lahir" => $this->input->post('tempatlahir', true),
                "TTL" => $this->input->post('tanggallahir', true),
                "Alamat" => $this->input->post('alamat', true),
                "Jenis_kelamin" => $this->input->post('jeniskelamin', true),
                "Umur" => $this->input->post('umur', true),
                "Pekerjaan" => $this->input->post('pekerjaan', true),
                "Telp" => $this->input->post('nohp', true),
                "Tgl_Pendaftaran" => date('Y-m-d'),
            ];
            if ($this->pemohon->tambahPemohon($data)) {
                $this->session->set_flashdata('flash', 'Data Item Berhasil DiTambahkan');
                redirect('pemohon');
            } else {
                $this->session->set_flashdata('flash', 'Data Item Gagal ditambahkan');
                redirect('pemohon');
            }
        }
    }

    public function edit($id)
    {
        $data['title'] = 'BPN Edit Data Pemohon';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['editpemohon'] = $this->pemohon->getPemohonbyId($id);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tempatlahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tanggallahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('umur', 'Umur', 'required|trim');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('nohp', 'No HP', 'required|trim|min_length[8]', [
            'min_length' => 'No HP terlalu pendek!'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('pemohon/edit', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                "No_KTP" => $this->input->post('noktp', true),
                "Nama_Pemohon" => $this->input->post('nama', true),
                "tempat_lahir" => $this->input->post('tempatlahir', true),
                "TTL" => $this->input->post('tanggallahir', true),
                "Alamat" => $this->input->post('alamat', true),
                "Jenis_kelamin" => $this->input->post('jeniskelamin', true),
                "Umur" => $this->input->post('umur', true),
                "Pekerjaan" => $this->input->post('pekerjaan', true),
                "Telp" => $this->input->post('nohp', true),
            ];
            $this->pemohon->editPemohon($data);
            $this->session->set_flashdata('message', 'Data Pemohon Berhasil DiUbah');
            redirect('pemohon');
        }
    }

    public function hapus($id)
    {
        if (currentUser()['role_id'] != 1) {
            redirect('pemohon');
        }
        $this->pemohon->hapusPemohon($id);
        $this->session->set_flashdata('flash', 'Data Pemohon Berhasil DiHapus');
        redirect('pemohon');
    }
}
