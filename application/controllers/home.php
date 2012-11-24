<?php
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('login');
	}

	public function validasi_login()
	{
		if($this->M_admin->validasi_admin($this->input->post('username'),$this->input->post('password')))
		{
			$newdata = array(
                   'nama'  => $this->input->post('username'),
                   'role'     => 'admin',
                   'logged_in' => TRUE
               );
			$this->session->set_userdata($newdata);
			redirect('admin');
		}
		elseif($this->M_guru->validasi_guru($this->input->post('username'),$this->input->post('password'))) 
		{
			$guru = $this->m_guru->get_guru($username);
			$newdata = array(
                   'nama'  => $guru['nama_guru'],
                   'role'     => 'guru',
                   'logged_in' => TRUE
               );
			$this->session->set_userdata($newdata);	
			redirect('guru');
		}
		elseif ($this->M_siswa->validasi_siswa($this->input->post('username'),$this->input->post('password'))) 
		{
			$siswa = $this->m_siswa->get_guru($username);
			$newdata = array(
                   'nama'  => $siswa['nama_siswa'],
                   'role'     => 'siswa',
                   'logged_in' => TRUE
               );
			$this->session->set_userdata($newdata);
			redirect('siswa');
		}
		else
		{
			$this->session->set_flashdata('msg', 'Login Gagal');
			redirect('home');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('msg', 'Berhasil Logout');
		redirect('home');
	}
}