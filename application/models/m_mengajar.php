<?php
Class M_mengajar extends CI_Model
{
	public function get($aktif = TRUE,$offset = 0,$limit = 20)
	{
		if($aktif == TRUE)
		{
			$this->db->where('id_semester',get_semester_aktif());	
		}
		$this->db->join('guru', 'guru.id_guru = mengajar.id_guru');
		$this->db->join('mapel', 'mapel.id_mapel = mengajar.id_mapel');

		$query = $this->db->get('mengajar',$limit,$offset);
		return $query->result_array();
	}

	public function get_mengajar_guru($id_guru,$aktif = TRUE,$offset = 0, $limit = 20)
	{
		if($aktif == TRUE)
		{
			$this->db->where('id_semester',get_semester_aktif());	
		}
		$this->db->where('mengajar.id_guru',$id_guru);
		$this->db->join('guru', 'guru.id_guru = mengajar.id_guru');
		$this->db->join('mapel', 'mapel.id_mapel = mengajar.id_mapel');

		$query = $this->db->get('mengajar',$limit,$offset);
		return $query->result_array();
	}

	public function set_guru_mengajar($data)
	{
		$this->db->insert('mengajar', $data);
	}

	public function delete($id_mengajar)
	{
		$this->db->delete('mengajar', array('id_mengajar' => $id_mengajar));
	}

	public function cek_mengajar($id_guru,$id_mapel,$id_semester)
	{
		$this->db->where('id_guru', $id_guru); 
		$this->db->where('id_mapel', $id_mapel);
		$this->db->where('id_semester', $id_semester);  
		$query = $this->db->get('mengajar');
		if($query->num_rows > 0)
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
			$this->db->where('id_semester',get_semester_aktif());	
		}
		$this->db->join('guru', 'guru.id_guru = mengajar.id_guru');
		$this->db->join('mapel', 'mapel.id_mapel = mengajar.id_mapel');

		$query = $this->db->get('mengajar');
		return $query->num_rows();
	}

}