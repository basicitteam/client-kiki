<?php
Class kelas extends CI_Controller
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
        $config['base_url'] = site_url('admin/kelas/index');
        $config['total_rows'] = $this->M_kelas->get_total_row();
        $config['per_page'] = 10;
        $config['uri_segment'] = 4; 

        $this->pagination->initialize($config);
        $data['data_kelas'] = $this->M_kelas->get($offset,$config['per_page']);
        $data['menu'] = 'kelas';
    	$this->load->view('templates/header',$data);
		$this->load->view('admin/kelas',$data);
		$this->load->view('templates/footer');
    }

    public function add()
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

    public function edit($id_kelas)
    {
        $data['kelas'] = $this->M_kelas->get_kelas($id_kelas);
        $data['menu'] = 'kelas';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/edit_kelas',$data);
        $this->load->view('templates/footer');
    }

    public function update()
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

    public function delete()
    {
        $this->M_kelas->delete($this->input->post('id_kelas'));
        $this->session->set_flashdata('msg', 'Kelas berhasil di hapus');
        redirect('admin/kelas');
    }
}