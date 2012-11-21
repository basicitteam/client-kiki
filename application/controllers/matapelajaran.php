<?php
class Matapelajaran extends CI_Controller
{
	public function index()
	{
		//$data('title') = 'Home';
		$this->load->view('templates/header');
		$this->load->view('admin/matapelajaran');
		$this->load->view('templates/footer');
	}
	
	public function add_mata_pelajaran()
	{
		echo 'belom berfungsi';
	}
	
	public function edit()
	{
		$this->load->view('templates/header');
		$this->load->view('admin/edit_matapelajaran');
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