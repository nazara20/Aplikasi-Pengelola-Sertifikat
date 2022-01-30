<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datatanah extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Datatanah_model', 'datatanah');
        $this->load->model('Pemohon_model', 'pemohon');
        if (currentUser() == null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda belum login, silahkan login terlebih dahulu. </div>');
            redirect('auth');
            
        }
    }

    public function index()
    {
        $data['title'] = 'BPN Data Tanah';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['datatanah'] = $this->datatanah->getAllDatatanah();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('datatanah/index', $data);
        $this->load->view('template/footer');
    }
    

    public function viewpicture($idview)
    {
        $data['title'] = 'BPN Lihat Gambar';
        $data['datatanahview'] = $this->datatanah->getDatatanahbyId($idview);
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['datatanah'] = $this->datatanah->getAllDatatanah();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('datatanah/view', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['kodehak'] = $this->datatanah->buat_kode();
        $data['title'] = 'BPN Tambah Data Tanah';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['pemohonselect'] = $this->pemohon->getAllPemohon();
        $this->form_validation->set_rules('No_KTP', 'No KTP', 'required|trim');
        $this->form_validation->set_rules('Letak_Bidang_Tnh', 'Letak Bidang Tanah', 'required|trim');
        $this->form_validation->set_rules('Luas_Tnh', 'Luas Tanah', 'required|trim');
        $this->form_validation->set_rules('Status_tnh', 'Status Tanah', 'required|trim');
        $this->form_validation->set_rules('No_kohir', 'No Kohir', 'required|trim');
        $this->form_validation->set_rules('No_Persil', 'No Persil', 'required|trim');
        $this->form_validation->set_rules('Nama_pewaris', 'Nama Pewaris', 'required|trim');
        $this->form_validation->set_rules('Meninggal_thn', 'Meninggal Tahun', 'required|trim');
        $this->form_validation->set_rules('Nama_pmbri_hibah', 'Nama Pemberi Hibah', 'required|trim');
        $this->form_validation->set_rules('tgl_hibah', 'Tanggal Hibah', 'required|trim');
        $this->form_validation->set_rules('No_akta_hibah', 'No Akta Hibah', 'required|trim');
        $this->form_validation->set_rules('tgl_pembelian', 'Tanggal Pembelian', 'required|trim');
        $this->form_validation->set_rules('Nm_PPAT_pembelian', 'Nama PPAT Pembelian', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('datatanah/tambah', $data);
            $this->load->view('template/footer');
        } else {
          
            $data = [
                "No_HAK" => $this->input->post('No_HAK', true),
                "No_KTP" => $this->input->post('No_KTP', true),
                "Letak_Bidang_Tnh" => $this->input->post('Letak_Bidang_Tnh', true),
                "Luas_Tnh" => $this->input->post('Luas_Tnh', true),
                "Status_tnh" => $this->input->post('Status_tnh', true),
                "No_kohir" => $this->input->post('No_kohir', true),
                "No_Persil" => $this->input->post('No_Persil', true),
                "Nama_pewaris" => $this->input->post('Nama_pewaris', true),
                "Meninggal_thn" => $this->input->post('Meninggal_thn', true),
                "Nama_pmbri_hibah" => $this->input->post('Nama_pmbri_hibah', true),
                "tgl_hibah" => $this->input->post('tgl_hibah', true),
                "No_akta_hibah" => $this->input->post('No_akta_hibah', true),
                "tgl_pembelian" => $this->input->post('tgl_pembelian', true),
                "Nm_PPAT_pembelian" => $this->input->post('Nm_PPAT_pembelian', true),
            ];
            $upload_image = $_FILES['Surat_waris'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
                $config['max_size'] = '2048';
                $config['upload_path'] = 'admin/img/datatanah';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('Surat_waris')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('Surat_waris', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            if ($this->datatanah->tambahDatatanah($data)) {
                $this->session->set_flashdata('flash', 'Data Tanah Berhasil DiTambahkan');
                redirect('datatanah');
            } else {
                $this->session->set_flashdata('flash', 'Data Tanah Gagal ditambahkan');
                redirect('datatanah');
            }
        }
    }


    public function edit($id)
    {
        $data['title'] = 'BPN Edit Data Tanah';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['editdatatanah'] = $this->datatanah->getDatatanahbyId($id);
        $data['pemohonselect'] = $this->pemohon->getAllPemohon();
        $this->form_validation->set_rules('No_KTP', 'No KTP', 'required|trim');
        $this->form_validation->set_rules('Letak_Bidang_Tnh', 'Letak Bidang Tanah', 'required|trim');
        $this->form_validation->set_rules('Luas_Tnh', 'Luas Tanah', 'required|trim');
        $this->form_validation->set_rules('Status_tnh', 'Status Tanah', 'required|trim');
        $this->form_validation->set_rules('No_kohir', 'No Kohir', 'required|trim');
        $this->form_validation->set_rules('No_Persil', 'No Persil', 'required|trim');
        $this->form_validation->set_rules('Nama_pewaris', 'Nama Pewaris', 'required|trim');
        $this->form_validation->set_rules('Meninggal_thn', 'Meninggal Tahun', 'required|trim');
        $this->form_validation->set_rules('Nama_pmbri_hibah', 'Nama Pemberi Hibah', 'required|trim');
        $this->form_validation->set_rules('tgl_hibah', 'Tanggal Hibah', 'required|trim');
        $this->form_validation->set_rules('No_akta_hibah', 'No Akta Hibah', 'required|trim');
        $this->form_validation->set_rules('tgl_pembelian', 'Tanggal Pembelian', 'required|trim');
        $this->form_validation->set_rules('Nm_PPAT_pembelian', 'Nama PPAT Pembelian', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('datatanah/edit', $data);
            $this->load->view('template/footer');
        } else {
          
            $data = [
                "No_HAK" => $this->input->post('No_HAK', true),
                "No_KTP" => $this->input->post('No_KTP', true),
                "Letak_Bidang_Tnh" => $this->input->post('Letak_Bidang_Tnh', true),
                "Luas_Tnh" => $this->input->post('Luas_Tnh', true),
                "Status_tnh" => $this->input->post('Status_tnh', true),
                "No_kohir" => $this->input->post('No_kohir', true),
                "No_Persil" => $this->input->post('No_Persil', true),
                "Nama_pewaris" => $this->input->post('Nama_pewaris', true),
                "Meninggal_thn" => $this->input->post('Meninggal_thn', true),
                "Nama_pmbri_hibah" => $this->input->post('Nama_pmbri_hibah', true),
                "tgl_hibah" => $this->input->post('tgl_hibah', true),
                "No_akta_hibah" => $this->input->post('No_akta_hibah', true),
                "tgl_pembelian" => $this->input->post('tgl_pembelian', true),
                "Nm_PPAT_pembelian" => $this->input->post('Nm_PPAT_pembelian', true),
            ];
            $upload_image = $_FILES['Surat_waris'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
                $config['max_size'] = '2048';
                $config['upload_path'] = 'admin/img/datatanah';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('Surat_waris')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('Surat_waris', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            if ($this->datatanah->editDatatanah($data)) {
                $this->session->set_flashdata('flash', 'Data Tanah Berhasil Diubah');
                redirect('datatanah');
            } else {
                $this->session->set_flashdata('flash', 'Data Tanah Gagal diubah');
                redirect('datatanah');
            }
        }
    }






   
}
