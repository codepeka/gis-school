<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Tampilan Utama';
		$data['url'] = 'Home';
		$this->load->view('template/header', $data);
		$this->load->view('home');
		$this->load->view('template/footer');
	}
}
