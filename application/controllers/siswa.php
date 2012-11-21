<?php
class Siswa extends CI_Controller
{
	public function index()
	{
		//$data('menu') = 'siswa';
		$this->load->view('templates/header');
		$this->load->view('admin/siswa');
		$this->load->view('templates/footer');
	}
	
	public function add_siswa_manual()
	{
		$this->load->view('templates/header');
		$this->load->view('admin/tambah_siswa_manual');
		$this->load->view('templates/footer');
	}
	
	public function insert_siswa_manual()
	{
		echo 'belom berfungsi';
	}
	
	public function add_siswa_upload()
	{
		$this->load->view('templates/header');
		$this->load->view('admin/tambah_siswa_upload');	
		$this->load->view('templates/footer');
	}
	
	public function insert_siswa_upload()
	{
		echo 'belum berfungsi';
	}
	
	public function edit()
	{
		$this->load->view('templates/header');
		$this->load->view('admin/edit_siswa');
		$this->load->view('templates/footer');
	}
	
	public function update()
	{
		echo 'belom berfungsi';	
	}
	
	public function delete()
	{
		echo 'belom berfungsi';
	}
	
	public function lihat_siswa()
	{
		echo 'belum berfungsi';
	}
	
}