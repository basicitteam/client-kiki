<?php
Class tahun_ajaran extends CI_Controller
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
        $config['base_url'] = site_url('admin/tahun_ajaran/index/');
        $config['total_rows'] = count($this->M_tahun_ajaran->get());
        $config['per_page'] = 10; 
        $config['uri_segment'] = 4;

        $this->pagination->initialize($config);

        $data['tahun_ajaran'] = $this->M_tahun_ajaran->get($offset,$config['per_page']);
        $data['menu'] = 'tahunajaran';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/tahunajaran',$data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $this->form_validation->set_rules('tahun_ajaran', 'Tahun Ajaran', 'required|max_length[20]|is_unique[tahun_ajaran.tahun_ajaran]');
        if($this->form_validation->run())
        {
            $data = array('tahun_ajaran' => $this->input->post('tahun_ajaran'));
            $this->M_tahun_ajaran->insert($data);
            $this->session->set_flashdata('msg', 'Tahun Ajaran '.$this->input->post('tahun_ajaran').' Berhasil Ditambahkan!');
            redirect('admin/tahun_ajaran');
        }
        else
        {
            $this->session->set_flashdata('msg', 'Tahun Ajaran '.$this->input->post('tahun_ajaran').' Gagal Ditambahkan!');
            redirect('admin/tahun_ajaran');   
        }
    }

    public function set_aktif()
    {
        $this->M_tahun_ajaran->set_semester($this->input->post('id_semester'));
        redirect('admin/tahun_ajaran');
    }

    public function delete()
    {
        $this->M_tahun_ajaran->delete($this->input->post('id_semester'));
        $this->session->set_flashdata('msg', 'Tahun Ajaran Dihapus!');
        redirect('admin/tahun_ajaran');
    }
}