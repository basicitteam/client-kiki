<?php
class Guru extends CI_Controller
{
	public function index()
	{
		//$data('title') = 'Home';
		$this->load->view('templates/header');
		$this->load->view('admin/guru');
		$this->load->view('templates/footer');
	}
	
	public function add_guru_manual()
	{
		$this->load->view('templates/header');
		$this->load->view('admin/tambah_guru_manual');
		$this->load->view('templates/footer');
	}
	
	public function insert_guru_manual()
	{
		echo 'belom berfungsi';
	}
	
	public function add_guru_upload()
	{
		$this->load->view('templates/header');
		$this->load->view('admin/tambah_guru_upload');
		$this->load->view('templates/footer');
	}
	
	public function insert_guru_upload()
	{
		echo 'belum berfungsi';
	}
	
	public function edit()
	{
		$this->load->view('admin/edit_guru');	
	}
	
	public function update()
	{
		echo 'belom berfungsi';	
	}
	
	public function delete()
	{
		echo 'belom berfungsi';
	}
	
	public function lihat_guru()
	{
		echo 'belum berfungsi';
	}
	
}