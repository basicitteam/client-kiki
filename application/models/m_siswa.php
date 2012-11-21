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

	public function get_siswa()
	{
		$query = $this->db->query('
		select * from siswa 
		inner join kelas on siswa.id_kelas = kelas.id_kelas
		');
		return $query->result_array();
	}
	
	public function get($nis)
	{
		$query = $this->db->query('
		select * from siswa 
		inner join kelas on siswa.id_kelas = kelas.id_kelas
		');
		return $query->row_array();
	}
	
	public function is_siswa_exist($nis)
	{
		$query = $this->db->get_where('siswa', array('nis' => $nis));
		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function update($nis,$data)
	{
		$this->db->where('nis', $nis);
		$this->db->update('siswa', $data); 
	}
	
	public function insert($siswa)
	{
		if($this->db->insert('siswa', $siswa))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function delete($nis)
	{
		$this->db->delete('siswa', array('nis' => $nis)); 
	}
}