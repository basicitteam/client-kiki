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
		$guru = $this->M_guru->get_guru($this->session->userdata('nip'));
		$data['materi'] = $this->M_materi->get_by_guru($guru['id_guru']);
		$data['profile'] = $this->M_guru->get_guru($this->session->userdata('nip'));
		$data['menu'] = 'materi';
		$this->load->view('templates_guru/header',$data);
		$this->load->view('guru/materi');
		$this->load->view('templates_guru/footer');
	}

	public function add()
	{
		$guru = $this->M_guru->get_guru($this->session->userdata('nip'));
		$data['mapel'] = $this->M_mengajar->get_mengajar_guru($guru['id_guru']);
		$data['profile'] = $this->M_guru->get_guru($this->session->userdata('nip'));
		$data['menu'] = 'materi';
		$this->load->view('templates_guru/header',$data);
		$this->load->view('guru/tambah_materi');
		$this->load->view('templates_guru/footer');
	}

	public function add_proses()
	{
		$config['upload_path'] = './assets/uploads/materi/';
		$config['allowed_types'] = '*';
		$config['max_size']	= '20480';

		$this->upload->initialize($config);

		if ($this->upload->do_upload())
		{
			$file = $this->upload->data();
			$data = array(
			'id_mengajar' => $this->input->post('id_mengajar'),
			'materi' => $this->input->post('materi'),
			'keterangan' => $this->input->post('keterangan'),
			'file' => $file['file_name']
			);
			$this->session->set_flashdata('msg', 'Materi '.$this->input->post('materi').' Berhasil Ditambahkan!');
			$this->M_materi->insert($data);
		}
		else
		{
			$this->session->set_flashdata('msg', 'Materi '.$this->input->post('materi').' Gagal diupload! '.$this->upload->display_errors());
		}
		
		redirect('guru/materi');
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
