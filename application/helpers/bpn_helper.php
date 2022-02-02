<?php

/** @noinspection PhpUndefinedFieldInspection */
defined('BASEPATH') or exit('No direct script access allowed');


/**
 * Page title helper
 * 
 * @param string|null $pageTitle Page title
 * 
 * @return void|string
 */
function page_title(string $pageTitle = null)
{
    $CI = &get_instance();

    if ($pageTitle) {
        $CI->config->set_item('page_title', $pageTitle);
        return;
    }

    return $CI->config->item('page_title');
}


/**
 * Load main view template.
 * 
 * @param string $viewName Name and view path, relative to view folder
 * @param array|null $data Data will pass to the view
 * 
 * @return void
 */
function main_view(string $viewName, array $data = null)
{
    $CI = &get_instance();

    $CI->load->view('template/header', $data);
    $CI->load->view($viewName);
    $CI->load->view('template/footer');
}

/**
 * Format date
 * 
 * @param string|null $date
 * 
 * @return string
 */
function format_date(string $date = null): string
{
    if ($date == null) return '-';

    $months = [
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'
    ];

    $dates = explode('-', $date);
    $year = $dates[0];
    $month = $months[$dates[1]];
    $day = $dates[2];

    return $day . ' ' . $month . ' ' . $year;
}

/**
 * Load print view template.
 * 
 * @param string $viewName Name and view path, relative to view folder
 * @param array|null $data Data will pass to the view
 * 
 * @return void
 */
function print_view(string $viewName, array $data = null)
{
    $CI = &get_instance();

    $CI->load->view('template/print_head', $data);
    $CI->load->view($viewName);
    $CI->load->view('template/print_foot');
}


function suratukur()
{
    $CI = &get_instance();

    $CI->load->model('Pengukur_model');


    $suratukur = $CI->Pengukur_model->getPengukurbyId();

    if (!$suratukur) {
        return false;
    }

    return $suratukur;
}



/**
 * Check if pegawai is authenticated
 * returns object if authenticated or false if not
 * 
 * @return bool|object
 */
function authenticated()
{
    $CI = &get_instance();

    $CI->load->library('session');
    $CI->load->model('User_model');

    $id = $CI->session->userdata('logged_user');

    if (!$id) {
        return false;
    }

    $user = $CI->User_model->get($id);

    if (!$user) {
        return false;
    }

    return $user;

  
}