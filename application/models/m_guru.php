<?php
Class M_guru extends CI_Model
{
	public function validasi_guru($nip, $password)
	{
		$query = $this->db->get_where('guru', array('nip' => $nip, 'password' => md5($password)));
		if($query->num_rows() == 1)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function get_guru($nip)
	{
		$query = $this->db->get_where('guru', array('nip' => $nip));
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