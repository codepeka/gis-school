<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Tampilan Rute Sekolah';
		$data['url'] = 'Rute';
		$data['sekolah'] = $this->db->where('status', 1)->get('sekolah');
		$this->load->view('template/header', $data);
		$this->load->view('rute/list');
		$this->load->view('template/footer');
	}
}
