<?php
Class M_materi extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('materi', $data);
	}

	public function get_by_guru($id_guru,$aktif = TRUE,$offset = 0, $limit = 20)
	{
		$this->db->join('mengajar', 'mengajar.id_mengajar = materi.id_mengajar');
		$this->db->join('mapel', 'mapel.id_mapel = mengajar.id_mapel');
		$this->db->where('mengajar.id_guru', $id_guru); 
		$query = $this->db->get('materi', $limit, $offset);
		return $query->result_array();
	}

	public function delete($id_materi)
	{
		$this->db->delete('materi', array('id_materi' => $id_materi));
	}

	public function get_materi($id_materi)
	{
		$this->db->join('mengajar', 'mengajar.id_mengajar = materi.id_mengajar');
		$this->db->join('mapel', 'mapel.id_mapel = mengajar.id_mapel');
		$this->db->where('materi.id_materi', $id_materi); 
		$query = $this->db->get('materi');
		return $query->row_array();
	}
}