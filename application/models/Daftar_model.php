<?php
defined('BASEPATH') or exit('No Direct script access allowed');

class Daftar_model extends CI_Model
{

	public function __construct()
	{

		parent::__construct();
	}

	public function semua_pengguna()
	{

		$this->db->select('*');
		$this->db->from('user');
		$this->db->order_by('id_pengguna', 'ASC');

		return $this->db->get();
	}

	public function semua_jurusan()
	{

		$this->db->select('*');
		$this->db->from('jurusan');
		$this->db->order_by('id_jurusan', 'ASC');

		return $this->db->get();
	}

	public function semua_guru()
	{

		$this->db->select('*');
		$this->db->from('guru');
		$this->db->order_by('id_guru', 'ASC');

		return $this->db->get();
	}

	public function semua_perusahaan()
	{

		$this->db->select('*');
		$this->db->from('perusahaan');
		$this->db->order_by('id_perusahaan', 'ASC');

		return $this->db->get();
	}

	//coba aproval pengajuan
	public function semua_pengajuan()
	{

		$this->db->select('*');
		$this->db->from('pengajuan');
		$this->db->order_by('id_pengajuan', 'ASC');

		return $this->db->get();
	}

	public function getDataPagination_pengguna($limit, $offset)
	{

		$this->db->select('*');
		$this->db->from('user');
		$this->db->order_by('id_pengguna', 'ASC');
		$this->db->limit($limit, $offset);

		return $this->db->get();
	}

	public function getDataPagination_jurusan($limit, $offset)
	{

		$this->db->select('*');
		$this->db->from('jurusan');
		$this->db->order_by('id_jurusan', 'ASC');
		$this->db->limit($limit, $offset);

		return $this->db->get();
	}

	public function getDataPagination_guru($limit, $offset)
	{

		$this->db->select('*');
		$this->db->from('guru');
		$this->db->order_by('id_guru', 'ASC');
		$this->db->limit($limit, $offset);

		return $this->db->get();
	}

	public function getDataPagination_perusahaan($limit, $offset)
	{

		$this->db->select('*');
		$this->db->from('perusahaan');
		$this->db->order_by('id_perusahaan', 'ASC');
		$this->db->limit($limit, $offset);

		return $this->db->get();
	}

	//coba approval pengajuan
	public function getDataPagination_pengajuan($limit, $offset)
	{

		$this->db->select('*');
		$this->db->from('pengajuan');
		$this->db->order_by('id_pengajuan', 'ASC');
		$this->db->limit($limit, $offset);

		return $this->db->get();
	}

	public function tambah_pengguna($data)
	{ //menambahkan data

		// var_dump($this->input->post('jenis_kelamin', 'role'));
		// // exit;

		$this->db->insert('user', $data);
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	public function tambah_jurusan($data)
	{

		$this->db->insert('jurusan', $data);
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	public function tambah_guru($data)
	{ //menambahkan data

		var_dump($this->input->post('jenis_kelamin'));
		// exit;

		$this->db->insert('guru', $data);
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	public function tambah_perusahaan($data)
	{

		$this->db->insert('perusahaan', $data);
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	//coba approval pengajuan
	public function tambah_pengajuan($data)
	{

		$this->db->insert('pengajuan', $data);
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	public function lihat_pengguna($id)
	{

		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_pengguna', $id);

		return $this->db->get();
	}

	public function lihat_jurusan($id)
	{

		$this->db->select('*');
		$this->db->from('jurusan');
		$this->db->where('id_jurusan', $id);

		return $this->db->get();
	}

	public function lihat_guru($id)
	{

		$this->db->select('*');
		$this->db->from('guru');
		$this->db->where('id_guru', $id);

		return $this->db->get();
	}

	public function lihat_perusahaan($id)
	{

		$this->db->select('*');
		$this->db->from('perusahaan');
		$this->db->where('id_perusahaan', $id);

		return $this->db->get();
	}

	//form pengajuan
	public function lihat_pengajuan($id)
	{

		$this->db->select('*');
		$this->db->from('pengajuan');
		$this->db->where('id_pengajuan', $id);

		return $this->db->get();
	}

	public function update_pengguna($data, $id)
	{

		$this->db->update('user', $data, array('id_pengguna' => $id));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	public function update_jurusan($data, $id)
	{

		$this->db->update('jurusan', $data, array('id_jurusan' => $id));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	public function update_guru($data, $id)
	{

		$this->db->update('guru', $data, array('id_guru' => $id));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	public function update_perusahaan($data, $id)
	{

		$this->db->update('perusahaan', $data, array('id_perusahaan' => $id));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	//form pengajuan
	public function update_pengajuan($data, $id)
	{

		$this->db->update('pengajuan', $data, array('id_pengajuan' => $id));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	public function hapus_pengguna($id)
	{

		$this->db->delete('user', array('id_pengguna' => $id));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	public function hapus_jurusan($id)
	{

		$this->db->delete('jurusan', array('id_jurusan' => $id));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	public function hapus_guru($id)
	{

		$this->db->delete('guru', array('id_guru' => $id));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	public function hapus_perusahaan($id)
	{

		$this->db->delete('perusahaan', array('id_perusahaan' => $id));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	//form pengajuan
	public function hapus_pengajuan($id)
	{

		$this->db->delete('pengajuan', array('id_pengajuan' => $id));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	public function ubah_status($data, $id)
	{
		$this->db->where('id_pengajuan', $id);
		$this->db->update('pengajuan', $data);
		return TRUE;
	}
}