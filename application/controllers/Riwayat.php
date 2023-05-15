<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('RiwayatModel', 'rm');
        if (!$this->session->userdata('openedThisApps')) {
            redirect('auth/login');
            // } elseif (!$this->session->userdata('hak') == "admin") {
            //     redirect('home');
        }
    }

    public function index()
    {
        $data['title'] = "Data Riwayat";
        $data['url'] = "Riwayat";
        $this->load->view('template/header', $data);
        $this->load->view('riwayat/list');
        $this->load->view('template/footer');
    }

    public function ajax_list()
    {
        $list = $this->rm->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $r) {
            $no++;
            $row = array();
            $row[] = '<p class="text-center">' . $no . '</p>';
            $row[] = $r->tanggal;
            $row[] = $r->name;
            $row[] = $r->username;
            $row[] = $r->tipe;
            $row[] = $r->description;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->rm->count_all(),
            "recordsFiltered" => $this->rm->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
}
