<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporansuratukur extends CI_Controller
{
    /**
     * Class constructor method.
     */
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
        page_title('Surat Ukur');
        main_view('laporan/laporansuratukur/index');
    }

    public function cetak($id)
    {
        $start = htmlspecialchars($this->input->get('s'));
        $end = htmlspecialchars($this->input->get('e'));
        $filter = 'Semua Tanggal';
        $user= $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->db->select('*')->from('surat_ukur');
        $this->db->where('id', $id);
        $suratUkur = $this->db->get()->row_array();

        $data = $this->pengukur->getAllPetugasUkur();
        
        page_title('Surat Ukur');
        print_view('laporan/laporansuratukur/cetak', [
            'data' =>$data,
            'user' => $user,
            'suratUkur' => $suratUkur,
            'filter' => $filter
        ]);
    }
}
