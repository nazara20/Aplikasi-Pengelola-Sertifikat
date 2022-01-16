<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getUserByEmail($userEmail)
    {
        return $this
            ->db
            ->select('*')
            ->from('user')
            ->where('email', $userEmail)
            ->get()
            ->row_array();
    }
}
