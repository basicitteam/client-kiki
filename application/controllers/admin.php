<?php
Class Admin extends CI_Controller
{
	public function __construct()
       {
            parent::__construct();
            if($this->session->userdata('logged_id') != TRUE && $this->session->userdata('role') != 'admin')
            {
            	$this->session->set_flashdata('msg', 'Anda Belum Login!');
            	redirect('home');
            }
       }

    public function index()
    {
    	redirect('admin/siswa');
    }

    //kelola siswa
    public function siswa()
    {
        $data['menu'] = 'siswa';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/siswa');
        $this->load->view('templates/footer');
    }
    //end kelola siswa

    //kelola kelas
    public function kelas($offset = 0)
    {
        $config['base_url'] = site_url('admin/kelas');
        $config['total_rows'] = $this->M_kelas->get_total_row();
        $config['per_page'] = 20; 

        $this->pagination->initialize($config);
        $data['data_kelas'] = $this->M_kelas->get($offset,$config['per_page']);
        $data['menu'] = 'kelas';
    	$this->load->view('templates/header',$data);
		$this->load->view('admin/kelas',$data);
		$this->load->view('templates/footer');
    }

    public function add_kelas()
    {
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|max_length[20]');
    	if(!$this->M_kelas->cek_kelas($this->input->post('kelas')) && $this->form_validation->run())
    	{
    		$data = array('kelas' => $this->input->post('kelas'));
    		$this->M_kelas->insert($data);
            $this->session->set_flashdata('msg', 'Kelas '.$this->input->post('kelas').' Berhasil Ditambahkan!');
            redirect('admin/kelas');
    	}
        else
        {
            $this->session->set_flashdata('msg', 'Kelas '.$this->input->post('kelas').' Gagal Ditambahkan!');
            redirect('admin/kelas');   
        }
    }

    public function edit_kelas($id_kelas)
    {
        $data['kelas'] = $this->M_kelas->get_kelas($id_kelas);
        $data['menu'] = 'kelas';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/edit_kelas',$data);
        $this->load->view('templates/footer');
    }

    public function update_kelas()
    {
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|max_length[20]');
        if($this->form_validation->run())
        {
            $data = array('kelas' => $this->input->post('kelas'));
            $this->M_kelas->update($this->input->post('id_kelas'),$data);
            $this->session->set_flashdata('msg', 'Kelas berhasil di update');
        }
        else
        {
            $this->session->set_flashdata('msg', 'Kelas gagal di update');   
        }
        redirect('admin/kelas');
    }

    public function delete_kelas()
    {
        $this->M_kelas->delete($this->input->post('id_kelas'));
        $this->session->set_flashdata('msg', 'Kelas berhasil di hapus');
        redirect('admin/kelas');
    }
    //end kelola kelas

    //kelola tahun_ajaran
    public function tahunajaran($offset = 0)
    {
        $config['base_url'] = site_url('admin/tahunajaran');
        $config['total_rows'] = count($this->M_tahun_ajaran->get());
        $config['per_page'] = 20; 

        $this->pagination->initialize($config);

        $data['tahun_ajaran'] = $this->M_tahun_ajaran->get($offset,$config['per_page']);
        $data['menu'] = 'tahunajaran';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/tahunajaran',$data);
        $this->load->view('templates/footer');
    }

    public function add_tahun_ajaran()
    {
        $this->form_validation->set_rules('tahun_ajaran', 'Tahun Ajaran', 'required|max_length[20]|is_unique[tahun_ajaran.tahun_ajaran]');
        if($this->form_validation->run())
        {
            $data = array('tahun_ajaran' => $this->input->post('tahun_ajaran'));
            $this->M_tahun_ajaran->insert($data);
            $this->session->set_flashdata('msg', 'Tahun Ajaran '.$this->input->post('tahun_ajaran').' Berhasil Ditambahkan!');
            redirect('admin/tahunajaran');
        }
        else
        {
            $this->session->set_flashdata('msg', 'Tahun Ajaran '.$this->input->post('tahun_ajaran').' Gagal Ditambahkan!');
            redirect('admin/tahunajaran');   
        }
    }

    public function set_semester_aktif()
    {
        $this->M_tahun_ajaran->set_semester($this->input->post('id_semester'));
        redirect('admin/tahunajaran');
    }

    public function delete_tahun_ajaran()
    {
        $this->M_tahun_ajaran->delete($this->input->post('id_semester'));
        $this->session->set_flashdata('msg', 'Tahun Ajaran Dihapus!');
        redirect('admin/tahunajaran');
    }
    //end kelola tahun_ajaran

    //kelola mata pelajaran
    public function matapelajaran($offset = 0)
    {
        $config['base_url'] = site_url('admin/matapelajaran');
        $config['total_rows'] = count($this->M_mata_pelajaran->get());
        $config['per_page'] = 20; 

        $this->pagination->initialize($config);

        $data['mata_pelajaran'] = $this->M_mata_pelajaran->get($offset,$config['per_page']);
        $data['menu'] = 'matapelajaran';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/matapelajaran',$data);
        $this->load->view('templates/footer');
    }

    public function add_mata_pelajaran()
    {
        $this->form_validation->set_rules('mata_pelajaran', 'Mata Pelajaran', 'required|max_length[20]|is_unique[mapel.mapel]');
        if($this->form_validation->run())
        {
            $data = array('mapel' => $this->input->post('mata_pelajaran'));
            $this->M_mata_pelajaran->insert($data);
            $this->session->set_flashdata('msg', 'Mata Pelajaran '.$this->input->post('mata_pelajaran').' Berhasil Ditambahkan!');
        }
        else
        {
            $this->session->set_flashdata('msg', 'Mata Pelajaran '.$this->input->post('mata_pelajaran').' Gagal Ditambahkan!');
        }
        redirect('admin/matapelajaran');
    }

    public function edit_mata_pelajaran($id_mata_pelajaran)
    {
        $data['mata_pelajaran'] = $this->M_mata_pelajaran->get_mata_pelajaran($id_mata_pelajaran);
        $data['menu'] = 'matapelajaran';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/edit_matapelajaran',$data);
        $this->load->view('templates/footer');
    }

    public function update_mata_pelajaran()
    {
         $this->form_validation->set_rules('mata_pelajaran', 'Mata Pelajaran', 'required|max_length[20]|is_unique[mapel.mapel]');
        if($this->form_validation->run())
        {
            $data = array('mapel' => $this->input->post('mata_pelajaran'));
            $this->M_mata_pelajaran->update($this->input->post('id_mata_pelajaran'),$data);
            $this->session->set_flashdata('msg', 'Mata Pelajaran '.$this->input->post('mata_pelajaran').' Berhasil Di update!');
        }
        else
        {
            $this->session->set_flashdata('msg', 'Mata Pelajaran '.$this->input->post('mata_pelajaran').' Gagal Di update!');
        }
        redirect('admin/matapelajaran');
    }

    public function delete_mata_pelajaran()
    {
        $this->M_mata_pelajaran->delete($this->input->post('id_mata_pelajaran'));
        $this->session->set_flashdata('msg', 'Mata Pelajaran berhasil di hapus!');
        redirect('admin/matapelajaran');
    }
    //end kelola mata pelajaran

    public function guru()
    {
        $this->load->view('templates/header');
        $this->load->view('admin/guru');
        $this->load->view('templates/footer');
    }
}