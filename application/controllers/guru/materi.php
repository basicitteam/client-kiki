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

    public function index($offset = 0)
	{
		$guru = $this->M_guru->get_guru($this->session->userdata('nip'));
		$config['base_url'] = site_url('guru/materi/index');
        $config['total_rows'] = count($this->M_materi->get_by_guru($guru['id_guru']));
        $config['per_page'] = 10;
        $config['uri_segment'] = 4; 

        $this->pagination->initialize($config);
		
		$data['materi'] = $this->M_materi->get_by_guru($guru['id_guru'],TRUE,$offset,$config['per_page']);
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
		$this->form_validation->set_rules('id_mengajar', 'Mata Pelajaran', 'required');
		$this->form_validation->set_rules('materi', 'Nama Materi', 'required|min_length[4]|max_length[35]');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required|min_length[5]');
		if($this->form_validation->run())
		{
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
		}
		else
		{
			$this->session->set_flashdata('msg', 'Validasi Gagal!');
		}
		redirect('guru/materi');
	}

	public function view($id_materi)
	{
		$data['materi'] = $this->M_materi->get_materi($id_materi);
		$data['profile'] = $this->M_guru->get_guru($this->session->userdata('nip'));
		$data['menu'] = 'materi';
		$this->load->view('templates_guru/header',$data);
		$this->load->view('guru/view_materi',$data);
		$this->load->view('templates_guru/footer');
	}
	
	public function delete()
	{
		$this->M_materi->delete($this->input->post('id_materi'));
		$this->session->set_flashdata('msg', 'Materi dihapus!');
		redirect('guru/materi');
	}
}
