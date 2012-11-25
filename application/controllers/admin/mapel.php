<?php
Class mapel extends CI_Controller
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
        $config['base_url'] = site_url('admin/mapel/index');
        $config['total_rows'] = count($this->M_mata_pelajaran->get());
        $config['per_page'] = 10;
        $config['uri_segment'] = 4; 

        $this->pagination->initialize($config);

        $data['mata_pelajaran'] = $this->M_mata_pelajaran->get($offset,$config['per_page']);
        $data['menu'] = 'matapelajaran';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/matapelajaran',$data);
        $this->load->view('templates/footer');
    }

    public function add()
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
        redirect('admin/mapel');
    }

    public function edit($id_mata_pelajaran)
    {
        $data['mata_pelajaran'] = $this->M_mata_pelajaran->get_mata_pelajaran($id_mata_pelajaran);
        $data['menu'] = 'matapelajaran';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/edit_matapelajaran',$data);
        $this->load->view('templates/footer');
    }

    public function update()
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
        redirect('admin/mapel');
    }

    public function delete()
    {
        $this->M_mata_pelajaran->delete($this->input->post('id_mata_pelajaran'));
        $this->session->set_flashdata('msg', 'Mata Pelajaran berhasil di hapus!');
        redirect('admin/mapel');
    }
}