<?php
class Laporan_tugas extends CI_Controller
{
	public function index()
	{
		
		$this->load->view('templates_guru/header');
		$this->load->view('guru/laporan_tugas');
		$this->load->view('templates_guru/footer');
	}
}