<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Penulis extends CI_Model
{
	// Ambil semua data penulis
	public function getAllPenulis()
	{
		return $this->db->get('penulis')->result();
	}

	// Tambah data penulis
	public function insertPenulis($data)
	{
		return $this->db->insert('penulis', $data);
	}

	// Ambil satu data penulis berdasarkan ID
	public function getPenulisById($id)
	{
		return $this->db->get_where('penulis', ['id' => $id])->row();
	}

	// Update data penulis
	public function updatePenulis($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('penulis', $data);
	}

	// Hapus data penulis
	public function deletePenulis($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('penulis');
	}
}