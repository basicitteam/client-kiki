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
    	$data['menu'] = 'home';
        $this->load->view('templates/header');
        $this->load->view('home');
        $this->load->view('templates/footer');
    }

    //kelola siswa
    public function siswa()
    {
        $data['data_siswa'] = $this->M_siswa->get_siswa();
        $data['kelas_data'] = $this->M_kelas->get_total_result();
        $data['menu'] = 'siswa';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/siswa',$data);
        $this->load->view('templates/footer');
    }
    
    public function cari_siswa()
    {
        $nis = $this->input->get('nis');
        if($this->M_siswa->is_siswa_exist($nis))
        {
            $data['siswa'] = $this->M_siswa->get($nis);
            $data['kelas_data'] = $this->M_kelas->get_total_result();
            $this->load->view('templates/header',$data);
            $this->load->view('admin/by_nis',$data);
            $this->load->view('templates/footer');
        }
        else
        {
            echo '
            <script type="text/javascript">
            alert("Nis tidak terdaftar");
            document.location = "'.site_url('admin/siswa').'";
            </script>
            ';
        }
    }
    
    public function add_siswa_manual()
    {
        if($this->input->post('btn') == 'Tambah Siswa')
        {
            $nis = $this->input->post('nis');
            $nama_siswa = $this->input->post('nama');
            $jns_kelamin = $this->input->post('jns_kelamin');
            $alamat = $this->input->post('alamat');
            $kelas = $this->input->post('kelas');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $siswa = array(
            'nis' => $nis,
            'nama_siswa' => $nama_siswa,
            'jns_kelamin' => $jns_kelamin,
            'alamat' => $alamat,
            'id_kelas' => $kelas,
            'username' => $username,
            'password' => $password
            );
            if($this->M_siswa->insert($siswa))
            {
                $this->session->set_flashdata('msg', 'Siswa <b>'.$this->input->post('nama').'</b> Berhasil Ditambahkan!');
                redirect('admin/siswa');
            }
            else
            {
                $this->session->set_flashdata('msg', 'Siswa '.$this->input->post('nama').' Gagal Ditambahkan!');
                redirect('admin/siswa');   
            }
        }
    }
    
    public function delete_siswa()
    {
        $this->M_siswa->delete($this->input->post('nis'));
        $this->session->set_flashdata('msg', 'Siswa berhasil di hapus');
        redirect('admin/siswa');
    }
    
    public function edit_siswa($nis)
    {
        $data['siswa'] = $this->M_siswa->get($nis);
        $data['kelas_data'] = $this->M_kelas->get_total_result();
        $data['menu'] = 'siswa';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/edit_siswa',$data);
        $this->load->view('templates/footer');
    }
    
    public function update_siswa()
    {
        if($this->input->post('btn') == 'Update Siswa')
        {
            $nis = $this->input->post('nis');
            $nama_siswa = $this->input->post('nama');
            $jns_kelamin = $this->input->post('jns_kelamin');
            $alamat = $this->input->post('alamat');
            $kelas = $this->input->post('kelas');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $siswa = array(
            'nis' => $nis,
            'nama_siswa' => $nama_siswa,
            'jns_kelamin' => $jns_kelamin,
            'alamat' => $alamat,
            'id_kelas' => $kelas,
            'username' => $username,
            'password' => $password
            );
            $this->M_siswa->update($this->input->post('nis'),$siswa);
            $this->session->set_flashdata('msg', 'Siswa <b>'.$this->input->post('nama').'</b> berhasil di update');
        }
        else
        {
            $this->session->set_flashdata('msg', 'Siswa <b>'.$this->input->post('nama').'</b> gagal di update');   
        }
        redirect('admin/siswa');
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