<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Search_model extends CI_Model
{

	// public function view()
	// {
	// 	return $this->db->get('siswa')->result(); // Tampilkan semua data yang ada di tabel siswa
	// }

	public function search($keyword)
	{
		$this->db->like('username', $keyword);
		$this->db->or_like('email', $keyword);
		$this->db->or_like('role', $keyword);
		$this->db->or_like('tgl_dibuat', $keyword);

		$result = $this->db->get('user')->result(); // Tampilkan data siswa berdasarkan keyword

		return $result;
	}
}