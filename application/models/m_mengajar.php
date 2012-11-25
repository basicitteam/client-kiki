<?php
Class M_mengajar extends CI_Model
{
	public function get_mengajar($aktif = TRUE)
	{
		if($aktif == TRUE)
		{
			$this->db->select('*');
			$this->db->from('mengajar');
			$this->db->join('guru', 'guru.id_guru = mengajar.id_guru');
			$this->db->join('mapel', 'mapel.id_mapel = mengajar.id_mapel');

			$query = $this->db->get();
			return $query->row_array();
		}
	}

}