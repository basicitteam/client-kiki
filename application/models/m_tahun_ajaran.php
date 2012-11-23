<?php
Class M_tahun_ajaran extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('tahun_ajaran', $data);
		$query = $this->db->get_where('tahun_ajaran', array('tahun_ajaran' => $data['tahun_ajaran']));
		$tahun_ajaran = $query->row_array();
		$semester = array(
			'id_tahun_ajaran' => $tahun_ajaran['id_tahun_ajaran'],
			'semester' => 'Semester 1',
			'status' => 0
			);
		$this->db->insert('semester', $semester);
		$semester['semester'] = 'Semester 2';
		$this->db->insert('semester', $semester);
	}

	public function get($offset = 0,$limit = 20)
	{
		$query = $this->db->query('
		SELECT * 
		FROM  `tahun_ajaran` 
		INNER JOIN semester ON tahun_ajaran.id_tahun_ajaran = semester.id_tahun_ajaran
		order by tahun_ajaran.id_tahun_ajaran DESC
		LIMIT '.$offset.' , '.$limit.'
		');
		return $query->result_array();
	}

	public function set_semester($id_semester)
	{
		$query = $this->db->get_where('semester', array('id_semester' => $id_semester));
		$semester = $query->row_array();
		if ($semester['status'] == 0) 
		{
			$data = array('status' => 1);
		}
		else
		{
			$data = array('status' => 0);	
		}
		$this->update_semester($id_semester, $data);
	}

	public function update_semester($id_semester,$data)
	{
		$this->db->where('id_semester', $id_semester);
		$this->db->update('semester', $data); 
	}

	public function delete($id_tahun_ajaran)
	{
		$this->db->delete('tahun_ajaran', array('id_tahun_ajaran' => $id_tahun_ajaran));
		$this->db->delete('semester', array('id_tahun_ajaran' => $id_tahun_ajaran));
	}

	public function get_semester_aktif()
	{
		$query = $this->db->get_where('semester', array('status' => 1));
		return $query->row_array();
	}
}