<?php 

/**
 * 
 */
class Daftar_model extends CI_Model
{
	
	public function daftar($data)
	{
		return $this->db->insert('pelanggan', $data);
	}

	public function cekUsername($username)
	{
		return $this->db->get_where('pelanggan', ['username' => $username]);
	}
}