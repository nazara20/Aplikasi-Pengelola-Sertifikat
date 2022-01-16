<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
    public function index()
    {
        $this->load->view('landing/index');
    }

    public function visi()
    {
        $this->load->view('landing/visi');
    }

    public function about()
    {
        $this->load->view('landing/about');
    }
}
