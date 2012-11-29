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

	public function search_by_nip($nip)
	{
		$this->db->like('nip', $nip);
		$query = $this->db->get('guru');
		
		if($query->num_rows() == 1)
		{
			return $query->result_array();
		}
		else
		{
			return FALSE;
		}
	}

	public function get_guru_by_id($id_guru)
	{
		$query = $this->db->get_where('guru', array('id_guru' => $id_guru));
		if($query->num_rows() == 1)
		{
			return $query->row_array();
		}
		else
		{
			return FALSE;
		}
	}

	public function get($offset = 0,$limit = 20)
	{
		$this->db->order_by("nama_guru", "asc");
		$query = $this->db->get('guru', $limit, $offset);
		return $query->result_array();
	}

	public function insert($data)
	{
		$this->db->insert('guru', $data);
	}

	public function update($id_guru,$data)
	{
		$this->db->where('id_guru', $id_guru);
		$this->db->update('guru', $data);
	}

	public function delete($id_guru)
	{
		$this->db->delete('guru', array('id_guru' => $id_guru)); 
	}
}