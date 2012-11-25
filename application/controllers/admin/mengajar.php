<?php
Class mengajar extends CI_Controller
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

    public function index()
    {
        $data['mengajar'] = $this->M_guru->get_mengajar();
        $data['menu'] = 'set_guru_mengajar';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/mengajar',$data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['mapel'] = '';
        $data['menu'] = 'set_guru_mengajar';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/tambah_set_guru');
        $this->load->view('templates/footer');
    }

    public function add_proses()
    {
        $mapel = $this->input->post('mapel');
        $semester = $this->M_tahun_ajaran->get_semester_aktif();
        $data = array(
            'id_guru' => $this->input->post('id_guru'),
            'id_semester' => $semester['id_semester']
            );
        foreach ($mapel as $key) 
        {
            $data['id_mapel'] = $key;
            $this->M_guru->set_guru_mengajar($data);
        }
        redirect('admin/set_guru_mengajar');
    }

}