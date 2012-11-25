<?php
Class mengambil extends CI_Controller
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
        $config['base_url'] = site_url('admin/mengambil/index');
        $config['total_rows'] = $this->M_mengambil->get_total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 4; 

        $this->pagination->initialize($config);

    	$data['mengambil'] = $this->M_mengambil->get(TRUE,$offset,$config['per_page']);
        $data['menu'] = 'set_siswa_mapel';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/set_siswa',$data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
    	$data['mapel'] = $this->M_mengajar->get();
    	$data['menu'] = 'set_siswa_mapel';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/tambah_set_siswa',$data);
        $this->load->view('templates/footer');	
    }

    public function add_proses()
    {
    	if($this->M_siswa->is_siswa_exist($this->input->post('nis')))
    	{
    		$data = array(
    		'nis' => $this->input->post('nis'),
    		);
    		foreach ($this->input->post('mapel') as $key) 
    		{
                if(!$this->M_mengambil->cek_mengambil($data['nis'],$key))
        		{
                	$data['id_mengajar'] = '';
        			$data['id_mengajar'] = $key;
        			$this->M_mengambil->insert($data);
                }
    		}
    		$this->session->set_flashdata('msg', 'input data berhasil!');
    		redirect('admin/mengambil');
    	}
    	else
    	{
    		$this->session->set_flashdata('msg', 'NIS tidak terdaftar!');
    		redirect('admin/mengambil');	
    	}
    }

    public function delete()
    {
        $this->M_mengambil->delete($this->input->post('id_mengambil'));
        $this->session->set_flashdata('msg', 'Data berhasil dihapus!');
        redirect('admin/mengambil');
    }
}