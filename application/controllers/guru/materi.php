<?php
Class materi extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        if(!is_login() && !is_guru())
        {
            $this->session->set_flashdata('msg', 'Anda Belum Login!');
            redirect('home'); 
        }
    }

    public function index()
	{
		$data['profile'] = $this->M_guru->get_guru($this->session->userdata('nip'));
		$data['menu'] = 'materi';
		$this->load->view('templates_guru/header',$data);
		$this->load->view('guru/materi');
		$this->load->view('templates_guru/footer');
	}

	public function add()
	{
		$data['profile'] = $this->M_guru->get_guru($this->session->userdata('nip'));
		$data['menu'] = 'materi';
		$this->load->view('templates_guru/header',$data);
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
