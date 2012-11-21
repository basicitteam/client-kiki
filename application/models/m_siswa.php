<?php
Class M_siswa extends CI_Model
{
	public function validasi_siswa($nis, $password)
	{
		$query = $this->db->get_where('siswa', array('nis' => $nis, 'password' => md5($password)));
		if($query->num_rows() == 1)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function get_siswa($nis)
	{
		$query = $this->db->get_where('siswa', array('nis' => $nis));
		if($query->num_rows() == 1)
		{
			return $query->row_array();
		}
		else
		{
			return FALSE;
		}
	}
}