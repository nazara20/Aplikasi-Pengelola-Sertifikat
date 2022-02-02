<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporandatatanah extends CI_Controller
{
    /**
     * Class constructor method.
     */
    public function __construct()
    {
        parent::__construct();
        if (currentUser() == null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda belum login, silahkan login terlebih dahulu. </div>');
            redirect('auth');
        }
    }

    public function cetak($id)
    {
        $start = htmlspecialchars($this->input->get('s'));
        $end = htmlspecialchars($this->input->get('e'));
        $user= $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->db->select('*')->from('data_tanah');
        $this->db->where('id', $id);
        $dataTanah = $this->db->get()->row_array();

        
        page_title('Data Tanah');
        print_view('laporan/laporandatatanah/cetak', [
            'user' => $user,
            'dataTanah' => $dataTanah
        ]);
    }
}
