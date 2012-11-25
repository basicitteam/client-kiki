<?php
Class siswa extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        if(!is_login() && !is_admin())
        {
            $this->session->set_flashdata('msg', 'Anda Belum Login!');
            redirect('home'); 
        }
    }

    public function index($offset = 0)
    {   
        $config['base_url'] = site_url('admin/siswa');
        $config['total_rows'] = count($this->M_siswa->get_siswa());
        $config['per_page'] = 5;
        $config['uri_segment'] = 4; 

        $this->pagination->initialize($config);
        $data['data_siswa'] = $this->M_siswa->get_siswa($offset,$config['per_page']);
        $data['kelas_data'] = $this->M_kelas->get_total_result();
        $data['menu'] = 'siswa';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/siswa/siswa',$data);
        $this->load->view('templates/footer');
    }
    
    public function cari_siswa()
    {
        $nis = $this->input->get('nis');
        if($this->M_siswa->is_siswa_exist($nis))
        {
            $data['siswa'] = $this->M_siswa->get($nis);
            $data['kelas_data'] = $this->M_kelas->get_total_result();
             $data['menu'] = 'siswa';
            $this->load->view('templates/header',$data);
            $this->load->view('admin/siswa/by_nis',$data);
            $this->load->view('templates/footer');
        }
        else
        {
           $this->session->set_flashdata('msg', '<p class="alert alert-error"><a class="close" data-dismiss="alert"><i class="icon-remove"></i></a>Siswa belum terdaftar!</p>');
           redirect('admin/siswa');
        }
    }
    
    public function add_siswa_manual()
    {
        $config['upload_path'] = './assets/uploads/foto_siswa';
        $config['allowed_types'] = 'gif|jpg|png';

        $this->upload->initialize($config);

        if($this->upload->do_upload())
        {
            if($this->input->post('btn') == 'Tambah Siswa')
            {
                $upload_data = $this->upload->data();
                $nis = $this->input->post('nis');
                $nama_siswa = $this->input->post('nama');
                $jns_kelamin = $this->input->post('jns_kelamin');
                $alamat = $this->input->post('alamat');
                $kelas = $this->input->post('kelas');
                $password = $this->input->post('password');
                $siswa = array(
                'nis' => $nis,
                'nama_siswa' => $nama_siswa,
                'jns_kelamin' => $jns_kelamin,
                'alamat' => $alamat,
                'id_kelas' => $kelas,
                'foto' => $upload_data['file_name'],
                'password' => md5($password)
                );
                    if($this->M_siswa->insert($siswa))
                    {
                        $this->session->set_flashdata('msg', '<p class="alert alert-success"><a class="close" data-dismiss="alert"><i class="icon-remove"></i></a>Siswa <b>'.$this->input->post('nama').'</b> berhasil Ditambahkan!</p>');
                        redirect('admin/siswa');
                    }
                    else
                    {
                        $this->session->set_flashdata('msg', '<p class="alert alert-error"><a class="close" data-dismiss="alert"><i class="icon-remove"></i></a>Siswa <b>'.$this->input->post('nama').'</b> gagal Ditambahkan!</p>');
                        redirect('admin/siswa');   
                    }
            }
        }
        else
        {
            $this->session->set_flashdata('msg', '<p class="alert alert-error"><a class="close" data-dismiss="alert"><i class="icon-remove"></i></a>Siswa <b>'.$this->input->post('nama').'</b> gagal di tambahkan!</p>');
            redirect('admin/siswa');   
        }

    }
    
    public function delete_siswa($nis)
    {
        $this->M_siswa->delete($this->input->post('nis'));
        $this->session->set_flashdata('msg', '<p class="alert alert-success"><a class="close" data-dismiss="alert"><i class="icon-remove"></i></a>Siswa <b>'.$this->input->post('nama').'</b> berhasil di delete!</p>');
        redirect('admin/siswa');
    }
    
    public function edit_siswa($nis)
    {
        $data['siswa'] = $this->M_siswa->get($nis);
        $data['kelas_data'] = $this->M_kelas->get_total_result();
        $data['menu'] = 'siswa';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/siswa/edit_siswa',$data);
        $this->load->view('templates/footer');
    }
    
    public function detail($nis)
    {
        $data['siswa'] = $this->M_siswa->get($nis);
        $data['kelas_data'] = $this->M_kelas->get_total_result();
        $data['menu'] = 'siswa';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/siswa/detail_siswa',$data);
        $this->load->view('templates/footer');
    }
    
    public function update_siswa()
    {
        $config['upload_path'] = './assets/uploads/foto_siswa';
        $config['allowed_types'] = 'gif|jpg|png';

        $this->upload->initialize($config);

        if($this->upload->do_upload())
        {
    
            if($this->input->post('btn') == 'Update Siswa')
            {
                $upload_data = $this->upload->data();
                $nis = $this->input->post('nis');
                $nama_siswa = $this->input->post('nama');
                $jns_kelamin = $this->input->post('jns_kelamin');
                $alamat = $this->input->post('alamat');
                $kelas = $this->input->post('kelas');
                $password = $this->input->post('password');
                $siswa = array(
                'nis' => $nis,
                'nama_siswa' => $nama_siswa,
                'jns_kelamin' => $jns_kelamin,
                'alamat' => $alamat,
                'id_kelas' => $kelas,
                'foto' => $upload_data['file_name']
                );
                $this->M_siswa->update($this->input->post('nis'),$siswa);
                $this->session->set_flashdata('msg', '<p class="alert alert-success"><a class="close" data-dismiss="alert"><i class="icon-remove"></i></a>Siswa <b>'.$this->input->post('nama').'</b> berhasil di update!</p>');
            }
            else
            {
                $this->session->set_flashdata('msg', '<p class="alert alert-error"><a class="close" data-dismiss="alert"><i class="icon-remove"></i></a>Siswa <b>'.$this->input->post('nama').'</b> gagal di update!</p>');   
            }
            redirect('admin/siswa/detail/'.$nis.'');
        }
        else
        {
                $this->session->set_flashdata('msg', '<p class="alert alert-error"><a class="close" data-dismiss="alert"><i class="icon-remove"></i></a>Foto <b>'.$this->input->post('nama').'</b> gagal di update!</p>');
                redirect('admin/siswa');
        }
    }
}