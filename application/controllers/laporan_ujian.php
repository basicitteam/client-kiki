<?php
class Laporan_ujian extends CI_Controller
{
	public function index()
	{
		
		$this->load->view('templates_guru/header');
		$this->load->view('guru/laporan_ujian');
		$this->load->view('templates_guru/footer');
	}
}