<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengukur extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengukur_model', 'pengukur');
        $this->load->model('Datatanah_model', 'datatanah');
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

    public function tambahpetugasukur()
    {
        $data['title'] = 'BPN Tambah Data Petugas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('Nip_petugas', 'NIP Petugas', 'required|trim');
        $this->form_validation->set_rules('Nama_Petugas', 'Nama Petugas', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('pengukur/tambahpetugasukur', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                "Nip_petugas" => $this->input->post('Nip_petugas', true),
                "Nama_Petugas" => $this->input->post('Nama_Petugas', true),
            ];
            if ($this->pengukur->tambahPetugasUkur($data)) {
                $this->session->set_flashdata('message', 'Data Petugas Ukur Berhasil DiTambahkan');
                redirect('pengukur/petugasukur');
            } else {
                $this->session->set_flashdata('message', 'Data Petugas Ukur Gagal ditambahkan');
                redirect('pengukur/petugasukur');
            }
        }
    }

    public function tambah()
    {
        $data['title'] = 'BPN Tambah Data Pengukur';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['petugasukurselect'] = $this->pengukur->getAllPetugasUkur();
        $data['datatanahselect'] = $this->datatanah->getAllDatatanah();
        $this->form_validation->set_rules('No_HAK', 'No HAK', 'required|trim');
        $this->form_validation->set_rules('Nip_petugas', 'NIP Petugas', 'required|trim');
        $this->form_validation->set_rules('Provinsi', 'Provinsi', 'required|trim');
        $this->form_validation->set_rules('Kecamatan', 'Kecamatan', 'required|trim');
        $this->form_validation->set_rules('Kelurahan', 'Kelurahan', 'required|trim');
        $this->form_validation->set_rules('RT/RW', 'RT/RW', 'required|trim');
        $this->form_validation->set_rules('Batas_utara', 'Batas utara', 'required|trim');
        $this->form_validation->set_rules('Batas_selatan', 'Batas selatan', 'required|trim');
        $this->form_validation->set_rules('Batas_Barat', 'Batas Barat', 'required|trim');
        $this->form_validation->set_rules('Batas_timur', 'Batas timur', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('pengukur/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                "No_HAK" => $this->input->post('No_HAK', true),
                "Nip_petugas" => $this->input->post('Nip_petugas', true),
                "Provinsi" => $this->input->post('Provinsi', true),
                "Kecamatan" => $this->input->post('Kecamatan', true),
                "Kelurahan" => $this->input->post('Kelurahan', true),
                "RT/RW" => $this->input->post('RT/RW', true),
                "Batas_utara" => $this->input->post('Batas_utara', true),
                "Batas_selatan" => $this->input->post('Batas_selatan', true),
                "Batas_Barat" => $this->input->post('Batas_Barat', true),
                "Batas_timur" => $this->input->post('Batas_timur', true),
            ];
            if ($this->pengukur->tambah($data)) {
                $this->session->set_flashdata('message', 'Data Pengukur Berhasil DiTambahkan');
                redirect('pengukur');
            } else {
                $this->session->set_flashdata('message', 'Data Pengukur Gagal ditambahkan');
                redirect('pengukur');
            }
        }
    }

    public function edit($id)
    {
        $data['title'] = 'BPN Edit Data Pengukur';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['editpengukur'] = $this->pengukur->getPengukurbyId($id);
        $data['petugasukurselect'] = $this->pengukur->getAllPetugasUkur();
        $data['datatanahselect'] = $this->datatanah->getAllDatatanah();
        $this->form_validation->set_rules('No_HAK', 'No HAK', 'required|trim');
        $this->form_validation->set_rules('Nip_petugas', 'NIP Petugas', 'required|trim');
        $this->form_validation->set_rules('Provinsi', 'Provinsi', 'required|trim');
        $this->form_validation->set_rules('Kecamatan', 'Kecamatan', 'required|trim');
        $this->form_validation->set_rules('Kelurahan', 'Kelurahan', 'required|trim');
        $this->form_validation->set_rules('RT/RW', 'RT/RW', 'required|trim');
        $this->form_validation->set_rules('Batas_utara', 'Batas utara', 'required|trim');
        $this->form_validation->set_rules('Batas_selatan', 'Batas selatan', 'required|trim');
        $this->form_validation->set_rules('Batas_Barat', 'Batas Barat', 'required|trim');
        $this->form_validation->set_rules('Batas_timur', 'Batas timur', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('pengukur/edit', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                "No_HAK" => $this->input->post('No_HAK', true),
                "Nip_petugas" => $this->input->post('Nip_petugas', true),
                "Provinsi" => $this->input->post('Provinsi', true),
                "Kecamatan" => $this->input->post('Kecamatan', true),
                "Kelurahan" => $this->input->post('Kelurahan', true),
                "RT/RW" => $this->input->post('RT/RW', true),
                "Batas_utara" => $this->input->post('Batas_utara', true),
                "Batas_selatan" => $this->input->post('Batas_selatan', true),
                "Batas_Barat" => $this->input->post('Batas_Barat', true),
                "Batas_timur" => $this->input->post('Batas_timur', true),
            ];
            if ($this->pengukur->editPengukur($data)) {
                $this->session->set_flashdata('message', 'Data Pengukur Berhasil Diubah');
                redirect('pengukur');
            } else {
                $this->session->set_flashdata('message', 'Data Pengukur Gagal diubah');
                redirect('pengukur');
            }
        }
    }

    public function hapus($id)
    {
        $this->pengukur->hapusPengukur($id);
        $this->session->set_flashdata('flash', 'Data Pengukur Berhasil DiHapus');
        redirect('pengukur');
    }

    public function editpetugasukur($id)
    {
        $data['title'] = 'BPN Edit Data Petugas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['editpetugasukur'] = $this->pengukur->getPetugasUkurbyId($id);
        $this->form_validation->set_rules('Nip_petugas', 'NIP Petugas', 'required|trim');
        $this->form_validation->set_rules('Nama_Petugas', 'Nama Petugas', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('pengukur/editpetugasukur', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                "Nip_petugas" => $this->input->post('Nip_petugas', true),
                "Nama_Petugas" => $this->input->post('Nama_Petugas', true),
            ];
            if ($this->pengukur->editPetugasUkur($data)) {
                $this->session->set_flashdata('message', 'Data Petugas Ukur Berhasil Diubah');
                redirect('pengukur/petugasukur');
            } else {
                $this->session->set_flashdata('message', 'Data Petugas Ukur Gagal diubah');
                redirect('pengukur/petugasukur');
            }
        }
    }

    public function hapuspetugasukur($id)
    {
        $this->pengukur->hapusPetugasUkur($id);
        $this->session->set_flashdata('flash', 'Data Petugas Ukur Berhasil DiHapus');
        redirect('pengukur/petugasukur');
    }

}
