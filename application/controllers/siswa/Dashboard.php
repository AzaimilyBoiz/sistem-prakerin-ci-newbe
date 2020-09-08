<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Daftar_model'); //load model

		//security session
		checked_login();
	}


	//dashboard
	public function index()
	{

		$this->load->view('siswa/index');
	}

	//form daftar pkl
	public function daftar_pkl($num = '')
	{

		$perpage = 5;
		$offset = $this->uri->segment(1);

		$data['perusahaan'] = $this->Daftar_model->getDataPagination_perusahaan($perpage, $offset)->result();

		$config['base_url'] = base_url();

		$config['total_rows'] = $this->Daftar_model->semua_perusahaan()->num_rows();

		$config['per_page'] = $perpage;
		$this->pagination->initialize($config);

		$this->load->view('siswa/Daftar_pkl', $data);
	}

	//form tambah simpan pengajuan
	public function tambah_simpan_pengajuan()
	{
		$data = array(
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'kelas' => $this->input->post('kelas'),
			'nama_perusahaan' => $this->input->post('nama_perusahaan'),
			'alamat_perusahaan' => $this->input->post('alamat_perusahaan'),
			'keterangan' => $this->input->post('keterangan')
		);

		if ($this->Daftar_model->tambah_pengajuan($data) == TRUE) {
			$this->session->set_flashdata('tambah_pengajuan', true);
		} else {
			$this->session->set_flashdata('tambah_pengajuan', false);
		}

		redirect(base_url('siswa/Dashboard/daftar_pengajuan'));
	}

	//form edit pengajuan
	public function edit_pengajuan($id)
	{

		$data['pengajuan'] = $this->Daftar_model->lihat_pengajuan($id)->row();
		$this->load->view('siswa/Edit_pengajuan', $data);
	}

	//form edit simpan pengajuan
	public function edit_simpan_pengajuan($id)
	{

		$data = array(
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'kelas' => $this->input->post('kelas'),
			'nama_perusahaan' => $this->input->post('nama_perusahaan'),
			'alamat_perusahaan' => $this->input->post('alamat_perusahaan'),
			'keterangan' => $this->input->post('keterangan')
		);

		if ($this->Daftar_model->update_pengajuan($data, $id) == TRUE) {
			$this->session->set_flashdata('edit_pengajuan', true);
		} else {
			$this->session->set_flashdata('edit_pengajuan', false);
		}

		redirect(base_url('siswa/Dashboard/daftar_pkl'));
	}


	//hapus pengajuan
	public function hapus_pengajuan_siswa($id)
	{

		if ($this->Daftar_model->hapus_pengajuan($id) == TRUE) {

			$this->session->set_flashdata('hapus_pengajuan', true);
		} else {

			$this->session->set_flashdata('hapus_pengajuan', false);
		}

		redirect(base_url('siswa/Dashboard/daftar_pengajuan'));
	}

	//methode untuk tambah pengajuan
	public function tambah_pengajuan()
	{
		$this->load->view('siswa/Tambah_pengajuan');
	}

	public function daftar_pengajuan()
	{

		$perpage =
			$offset = $this->uri->segment(1);

		$data['pengajuan'] = $this->Daftar_model->getDataPagination_pengajuan($perpage, $offset)->result();

		$config['base_url'] = site_url();

		$config['total_rows'] = $this->Daftar_model->semua_pengajuan()->num_rows();

		$config['per_page'] = $perpage;
		$this->pagination->initialize($config);

		$this->load->view('siswa/Daftar_pengajuan', $data);
	}


	public function search_pkl()
	{
		$keyword = $this->input->post('keyword');
		$this->db->like('id_perusahaan', $keyword);
		$this->db->or_like('nama_perusahaan', $keyword);
		$this->db->or_like('email', $keyword);
		$this->db->or_like('rekomendasi', $keyword);
		$query['perusahaan'] = $this->db->get('perusahaan')->result();
		$this->load->view('siswa/Daftar_pkl', $query);
	}
}