<?php

function role($role_id)
{
    $CI = get_instance();

    $CI->load->model('Role_model');

    $role = $CI->Role_model->getRoleById($role_id);

    if ($role) {
        return $role['role'];
    }

    return null;
}

function currentUser()
{
    $CI = get_instance();
    
    if (!$CI->session->userdata('email')) return null;

    $CI->load->model('User_model');

    $currentUserEmail = $CI->session->userdata('email');

    $user = $CI->User_model->getUserByEmail($currentUserEmail);

    return $user;
}


