<?php
class Laporan_tugas extends CI_Controller
{
	public function index()
	{
		$data['profile'] = $this->M_guru->get_guru($this->session->userdata('nip'));
		$this->load->view('templates_guru/header',$data);
		$this->load->view('guru/laporan_tugas');
		$this->load->view('templates_guru/footer');
	}
}