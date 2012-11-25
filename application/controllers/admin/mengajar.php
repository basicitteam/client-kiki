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
        $data['mengajar'] = $this->M_mengajar->get();
        $data['menu'] = 'set_guru_mengajar';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/mengajar',$data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['mapel'] = $this->M_mata_pelajaran->get();
        $data['menu'] = 'set_guru_mengajar';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/tambah_set_guru');
        $this->load->view('templates/footer');
    }

    public function add_proses()
    {
        if($this->M_guru->get_guru($this->input->post('nip')) != FALSE)
        {    
            $guru = $this->M_guru->get_guru($this->input->post('nip'));
            $mapel = $this->input->post('mapel');
            $semester = $this->M_tahun_ajaran->get_semester_aktif();
            $data = array(
                'id_guru' => $guru['id_guru'],
                'id_semester' => $semester['id_semester']
                );
            foreach ($mapel as $key) 
            {
                if($this->M_mengajar->cek_mengajar($guru['id_guru'],$key,$semester['id_semester']))
                {
                    $data['id_mapel'] = $key;
                    $this->M_mengajar->set_guru_mengajar($data);
                }
            }
            $this->session->set_flashdata('msg', 'input mengajar untuk guru '.$guru['nama_guru'].' berhasil');
        }
        else
        {
            $this->session->set_flashdata('msg', 'NIP '.$this->input->post('nip').' tidak terdaftar');
        }
        redirect('admin/mengajar');
    }

    public function delete()
    {
        $this->M_mengajar->delete($this->input->post('id_mengajar'));
        $this->session->set_flashdata('msg', 'Data berhasil dihapus');
        redirect('admin/mengajar');
    }

}