<?php
Class M_mengambil extends CI_Model
{
	public function get($aktif = TRUE,$offset = 0,$limit = 20)
	{
		if($aktif == TRUE)
		{
			$this->db->where('mengajar.id_semester',get_semester_aktif());	
		}
		$this->db->join('siswa', 'siswa.nis = mengambil.nis');
		$this->db->join('mengajar', 'mengajar.id_mengajar = mengambil.id_mengajar');
		$this->db->join('guru', 'mengajar.id_guru = guru.id_guru');
		$this->db->join('mapel', 'mapel.id_mapel = mengajar.id_mapel');

		$query = $this->db->get('mengambil',$limit,$offset);
		return $query->result_array();
	}

	public function insert($data)
	{
		$this->db->insert('mengambil', $data); 
	}

	public function delete($id_mengambil)
	{	
		$this->db->delete('mengambil', array('id_mengambil' => $id_mengambil));
	}

	public function cek_mengambil($nis,$id_mengajar)
	{
		$query = $this->db->get_where('mengambil', array('id_mengajar' => $id_mengajar, 'nis' => $nis));
		if($query->num_rows() > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function get_total_rows($aktif = TRUE)
	{
		if($aktif == TRUE)
		{
			$this->db->where('mengajar.id_semester',get_semester_aktif());	
		}
		$this->db->join('siswa', 'siswa.nis = mengambil.nis');
		$this->db->join('mengajar', 'mengajar.id_mengajar = mengambil.id_mengajar');
		$this->db->join('guru', 'mengajar.id_guru = guru.id_guru');
		$this->db->join('mapel', 'mapel.id_mapel = mengajar.id_mapel');

		$query = $this->db->get('mengambil');
		return $query->num_rows();
	}
}