<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "Blog";
        $data['url'] = "Blog";
        $data['blog'] = $this->db->get('blog')->result();
        $this->load->view('template/header', $data);
        $this->load->view('blog/list');
        $this->load->view('template/footer');
    }

    public function detail($id)
    {
        $data['title'] = "Blog";
        $data['blog'] = $this->db->where('id', $id)->get('blog')->row();

        $this->load->view('template/header', $data);
        $this->load->view('blog/detail');
        $this->load->view('template/footer');
    }
}
