<?php
class Tahunajaran extends CI_Controller
{
	public function index()
	{
		//$data('title') = 'Home';
		$this->load->view('templates/header');
		$this->load->view('admin/tahunajaran');
		$this->load->view('templates/footer');
	}
	
	public function add_tahun_ajaran()
	{
		echo 'belom berfungsi';
	}
	
	public function edit()
	{
		$this->load->view('templates/header');
		$this->load->view('admin/edit_tahunajaran');
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
	
}