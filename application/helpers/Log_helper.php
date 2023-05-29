<?php

function helper_log($tipe = "", $str = "")
{
    $CI = &get_instance();

    if (strtolower($tipe) == "login") {
        $log_tipe   = 'Login';
    } elseif (strtolower($tipe) == "logout") {
        $log_tipe   = 'Logout';
    } elseif (strtolower($tipe) == "add") {
        $log_tipe   = 'Add';
    } elseif (strtolower($tipe) == "update") {
        $log_tipe  = 'Update';
    } elseif (strtolower($tipe) == "delete") {
        $log_tipe  = 'Delete';
    } else {
        $log_tipe  = 'Others';
    }

    // paramter
    $param['user_id']       = $CI->session->userdata('idUser');
    $param['tanggal']       = date("Y-m-d H:i:s");
    $param['tipe']          = $log_tipe;
    $param['deskripsi']   = $str;

    //load model log
    $CI->load->model('RiwayatModel', 'riwayat');

    //save to database
    $CI->riwayat->save_log($param);
}
