<?php
Class M_admin extends CI_Model
{
	public function validasi_admin($username, $password)
	{
		$query = $this->db->get_where('admin', array('username' => $username, 'password' => md5($password)));
		if($query->num_rows() == 1)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

}