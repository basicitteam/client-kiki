<?php
Class M_kelas extends CI_Model
{
	public function cek_kelas($kelas)
	{
		$query = $this->db->get_where('kelas', array('kelas' => $kelas));
		if($query->num_rows() == 1)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	
	public function insert($data)
	{
		$this->db->insert('kelas', $data);
	}

	public function get($offset = 0,$limit = 20)
	{
		$query = $this->db->get('kelas', $limit, $offset);
		return $query->result_array();
	}

	public function get_total_row()
	{
		$query = $this->db->get('kelas');
		return $query->num_rows();	
	}

	public function get_total_result()
	{
		$query = $this->db->get('kelas');
		return $query->result_array();	
	}

	public function get_kelas($id_kelas)
	{
		$query = $this->db->get_where('kelas', array('id_kelas' => $id_kelas));
		return $query->row_array();
	}

	public function update($id_kelas,$data)
	{
		$this->db->where('id_kelas', $id_kelas);
		$this->db->update('kelas', $data); 
	}

	public function delete($id_kelas)
	{
		$this->db->delete('kelas', array('id_kelas' => $id_kelas)); 
	}
}