<?php
Class guru extends CI_Controller
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
        $config['base_url'] = site_url('admin/guru/index');
        $config['total_rows'] = count($this->M_guru->get());
        $config['per_page'] = 10;
        $config['uri_segment'] = 4; 

        $this->pagination->initialize($config);
        if($this->input->post('nip'))
        {
            if($this->M_guru->search_by_nip($this->input->post('nip')) != FALSE)
            {
                $data['guru'] = $this->M_guru->search_by_nip($this->input->post('nip'));   
            }
            else
            {
                echo $this->input->post('nip');
                $this->session->set_flashdata('msg', 'Tidak ada data untuk NIP '.$this->input->post('nip'));
                $data['guru'] = $this->M_guru->get($offset, $config['per_page']);
            }
        }
        else
        {
            $data['guru'] = $this->M_guru->get($offset, $config['per_page']);
        }
        $data['menu'] = 'guru';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/guru/guru',$data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['menu'] = 'guru';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/guru/tambah_guru_manual',$data);
        $this->load->view('templates/footer');
    }

    public function proses_guru_manual()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required|min_length[5]|is_unique[guru.nip]|numeric');
        $this->form_validation->set_rules('nama', 'Nama Guru', 'required|min_length[5]');
        $this->form_validation->set_rules('telp', 'No Telp', 'required|min_length[5]|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|min_length[5]|is_unique[guru.email]|valid_email');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[5]');
        $this->form_validation->set_rules('jns_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        if($this->form_validation->run())
        {
            $config['upload_path'] = './assets/uploads/foto_guru';
            $config['allowed_types'] = 'gif|jpg|png';

            $this->upload->initialize($config);

            if($this->upload->do_upload())
            {
                //insert ke tabel guru
                $upload_data = $this->upload->data();
                $data = array(
                'nama_guru' => $this->input->post('nama'),
                'nip' => $this->input->post('nip'),
                'no_telp' => $this->input->post('telp'),
                'email' => $this->input->post('email'),
                'foto' => $upload_data['file_name'],
                'alamat' => $this->input->post('alamat'),
                'jns_kelamin' => $this->input->post('jns_kelamin'),
                'password' => md5($this->input->post('password'))
                );
                $this->M_guru->insert($data);
                $this->session->set_flashdata('msg', 'Tambah Guru '.$this->input->post('nama').' Berhasil!');
                redirect('admin/guru');
            }
            else
            {
                $this->session->set_flashdata('msg', 'Upload Foto Gagal!');
                redirect('admin/guru');
            }
        }
        else
        {
            $this->session->set_flashdata('msg', 'Tambah Guru gagal! Form ada yang kosong atau tidak sesuai.');
            redirect('admin/guru');
        }
    }

    public function edit($id_guru)
    {
        $data['guru'] = $this->M_guru->get_guru_by_id($id_guru);
        $data['menu'] = 'guru';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/guru/edit_guru',$data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $this->form_validation->set_rules('nama', 'Nama Guru', 'required|min_length[5]');
        $this->form_validation->set_rules('telp', 'No Telp', 'required|min_length[5]|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|min_length[5]|valid_email');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[5]');
        $this->form_validation->set_rules('jns_kelamin', 'Jenis Kelamin', 'required');
        if($this->form_validation->run())
        {
            //siapin data buat update
            $data = array(
            'nama_guru' => $this->input->post('nama'),
            'no_telp' => $this->input->post('telp'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'jns_kelamin' => $this->input->post('jns_kelamin')
            );
            $config['upload_path'] = './assets/uploads/foto_guru';
            $config['allowed_types'] = 'gif|jpg|png';

            $this->upload->initialize($config);

            if($this->upload->do_upload())
            {
                $upload_data = $this->upload->data();
                $data['foto'] = $upload_data['file_name'];
            }//end upload
            if($this->input->post('password'))
            {
                $data['password'] = md5($this->input->post('password'));
            }
            $this->M_guru->update($this->input->post('id_guru'),$data);
            $this->session->set_flashdata('msg', 'Update Guru '.$this->input->post('nama').' Berhasil!');
            redirect('admin/guru');                        
        }
        else
        {
            $this->session->set_flashdata('msg', 'Tambah Guru gagal! Form ada yang kosong atau tidak sesuai.');
            redirect('admin/guru');
        }
    }

    public function delete()
    {
        $this->M_guru->delete($this->input->post('id_guru'));
        $this->session->set_flashdata('msg', 'Guru berhasil di hapus.');
        redirect('admin/guru');
    }

    public function view($id_guru)
    {
        $data['guru'] = $this->M_guru->get_guru_by_id($id_guru);
        $data['menu'] = 'guru';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/guru/view_guru',$data);
        $this->load->view('templates/footer');
    }

    public function add_upload()
    {
        $data['menu'] = 'guru';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/guru/tambah_guru_upload');
        $this->load->view('templates/footer');
    }
}