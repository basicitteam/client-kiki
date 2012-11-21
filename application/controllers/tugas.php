<?php
class Tugas extends CI_Controller
{
	public function index()
	{
		//$data('title') = 'Home';
		$this->load->view('templates_guru/header');
		$this->load->view('guru/tugas');
		$this->load->view('templates_guru/footer');
	}
	public function tambah_tugas_manual()
	{
		//$data('title') = 'Home';
		$this->load->view('templates_guru/header');
		$this->load->view('guru/tambah_tugas_manual');
		$this->load->view('templates_guru/footer');
	}
}