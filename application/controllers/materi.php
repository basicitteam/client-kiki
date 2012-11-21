<?php
class Materi extends CI_Controller
{
	public function index()
	{
		//$data('title') = 'Home';
		$this->load->view('templates_guru/header');
		$this->load->view('guru/materi');
		$this->load->view('templates_guru/footer');
	}
	
	public function tambah_materi_manual()
	{
		//$data('title') = 'Home';
		$this->load->view('templates_guru/header');
		$this->load->view('guru/tambah_materi_manual');
		$this->load->view('templates_guru/footer');
	}
	
	public function lihat_materi()
	{
		echo 'belom berfungsi';
	}
	
		public function insert_materi_manual()
	{
		echo 'belom berfungsi';
	}
}