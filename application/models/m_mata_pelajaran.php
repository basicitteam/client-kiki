<?php
Class M_mata_pelajaran extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('mapel', $data);
	}

	public function get($offset = 0,$limit = 20)
	{
		$this->db->order_by("mapel", "asc");
		$query = $this->db->get('mapel', $limit, $offset);
		return $query->result_array();
	}

	public function get_mata_pelajaran($id_mata_pelajaran)
	{
		$query = $this->db->get_where('mapel', array('id_mapel' => $id_mata_pelajaran));
		return $query->row_array();
	}

	public function update($id_mapel,$data)
	{
		$this->db->where('id_mapel', $id_mapel);
		$this->db->update('mapel', $data); 
	}

	public function delete($id_mapel)
	{
		$this->db->delete('mapel', array('id_mapel' => $id_mapel)); 
	}
}