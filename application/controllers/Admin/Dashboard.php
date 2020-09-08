<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Daftar_model'); //load model

		//security session
		// checked_login();
	}


	//methode form login
	public function index()
	{

		$this->load->view('admin/Daftar_pengajuan');
	}


	//methode menampilkan daftar pengguna
	public function daftar_pengguna($num = '')
	{

		$perpage =
			$offset = $this->uri->segment(1);

		$data['user'] = $this->Daftar_model->getDataPagination_pengguna($perpage, $offset)->result();
		$config['base_url'] = site_url();

		$config['total_rows'] = $this->Daftar_model->semua_pengguna()->num_rows();
		$config['per_page'] = $perpage;
		$this->pagination->initialize($config);

		$this->load->view('admin/Daftar_pengguna', $data);
	}


	//methode menampilkan daftar jurusan 
	public function daftar_jurusan($num = '')
	{

		$perpage =
			$offset = $this->uri->segment(1);

		$data['jurusan'] = $this->Daftar_model->getDataPagination_jurusan($perpage, $offset)->result();
		$config['base_url'] = site_url();

		$config['total_rows'] = $this->Daftar_model->semua_jurusan()->num_rows();

		$config['per_page'] = $perpage;
		$this->pagination->initialize($config);

		$this->load->view('admin/Daftar_jurusan', $data);
	}


	//methode menampilkan daftar guru
	public function daftar_guru($num = '')
	{

		$perpage =
			$offset = $this->uri->segment(1);

		$data['guru'] = $this->Daftar_model->getDataPagination_guru($perpage, $offset)->result();

		$config['base_url'] = site_url();

		$config['total_rows'] = $this->Daftar_model->semua_guru()->num_rows();

		$config['per_page'] = $perpage;
		$this->pagination->initialize($config);

		$this->load->view('admin/Daftar_guru', $data);
	}


	//methode menampilkan daftar perusahaan 
	public function daftar_perusahaan($num = '')
	{

		$perpage =
			$offset = $this->uri->segment(1);

		$data['perusahaan'] = $this->Daftar_model->getDataPagination_perusahaan($perpage, $offset)->result();

		$config['base_url'] = site_url();

		$config['total_rows'] = $this->Daftar_model->semua_perusahaan()->num_rows();

		$config['per_page'] = $perpage;
		$this->pagination->initialize($config);

		$this->load->view('admin/Daftar_perusahaan', $data);
	}


	//methode menampilkan daftar pengajuan
	public function daftar_pengajuan()
	{

		$perpage =
			$offset = $this->uri->segment(1);

		$data['pengajuan'] = $this->Daftar_model->getDataPagination_pengajuan($perpage, $offset)->result();

		$config['base_url'] = site_url();

		$config['total_rows'] = $this->Daftar_model->semua_pengajuan()->num_rows();

		$config['per_page'] = $perpage;
		$this->pagination->initialize($config);

		$this->load->view('admin/Daftar_pengajuan', $data);
	}


	//methode menampilkan form tambah daftar pengguna
	// public function tambah()
	// {

	// 	$this->load->view('admin/Tambah');
	// }


	//methode menampilkan form tambah daftar jurusan
	public function tambah_jurusan()
	{

		$this->load->view('admin/Tambah_jurusan');
	}


	//methode menampilkan form tambah daftar guru
	public function tambah_guru()
	{

		$this->load->view('admin/Tambah_guru');
	}


	//methode menampilkan form tambah daftar perusahaan
	public function tambah_perusahaan()
	{

		$this->load->view('admin/Tambah_perusahaan');
	}

	//methode menampilkan from tambah pengajuan
	public function tambah_pengajuan()
	{

		$this->load->view('admin/Tambah_pengajuan');
	}


	//methode form tambah dan simpan daftar pengguna
	// public function tambah_simpan()
	// {

	// 	$data = array(
	// 		'username' => $this->input->post('username'),
	// 		'email' => $this->input->post('email'),
	// 		'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
	// 		'role' => $this->input->post('role'),
	// 	);

	// 	if ($this->Daftar_model->tambah_pengguna($data) == TRUE) {
	// 		$this->session->set_flashdata('tambah_pengguna', true);
	// 	} else {
	// 		$this->session->set_flashdata('tambah_pengguna', false);
	// 	}

	// 	redirect(base_url('Admin/Dashboard/daftar_pengguna'));
	// }


	//methode form tambah dan simpan daftar jurusan 
	public function tambah_simpan_jurusan()
	{

		$data = array(
			'id_jurusan' => $this->input->post('id_jurusan'),
			'jurusan' => $this->input->post('jurusan'),
		);

		if ($this->Daftar_model->tambah_jurusan($data) == TRUE) {
			$this->session->set_flashdata('tambah_jurusan', true);
		} else {
			$this->session->set_flashdata('tambah_jurusan', false);
		}

		redirect(base_url('Admin/Dashboard/daftar_jurusan'));
	}


	//methode form tambah dan simpan daftar guru
	public function tambah_simpan_guru()
	{

		$data = array(
			'id_guru' => $this->input->post('id_guru'),
			'name_guru' => $this->input->post('name_guru'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'email' => $this->input->post('email'),
		);

		if ($this->Daftar_model->tambah_guru($data) == TRUE) {
			$this->session->set_flashdata('tambah_guru', true);
		} else {
			$this->session->set_flashdata('tambah_guru', false);
		}

		redirect(base_url('Admin/Dashboard/daftar_guru'));
	}


	//methode form tambah dan simpan daftar perusahaan
	public function tambah_simpan_perusahaan()
	{

		$data = array(
			'nama_perusahaan' => $this->input->post('nama_perusahaan'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'rekomendasi' => $this->input->post('rekomendasi'),
		);

		if ($this->Daftar_model->tambah_perusahaan($data) == TRUE) {
			$this->session->set_flashdata('tambah_perusahaan', true);
		} else {
			$this->session->set_flashdata('tambah_perusahaan', false);
		}

		redirect(base_url('Admin/Dashboard/daftar_perusahaan'));
	}

	//methode form tambah dan simpan pengajuan
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

		redirect(base_url('Admin/Dashboard/daftar_pengajuan'));
	}

	//panggil form edit database
	public function edit($id)
	{

		$data['user'] = $this->Daftar_model->lihat_pengguna($id)->row();
		$this->load->view('admin/Edit', $data);
	}

	public function edit_jurusan($id)
	{

		$data['jurusan'] = $this->Daftar_model->lihat_jurusan($id)->row();
		$this->load->view('admin/Edit_jurusan', $data);
	}

	public function edit_guru($id)
	{

		$data['guru'] = $this->Daftar_model->lihat_guru($id)->row();
		$this->load->view('admin/Edit_guru', $data);
	}

	public function edit_perusahaan($id)
	{

		$data['perusahaan'] = $this->Daftar_model->lihat_perusahaan($id)->row();
		$this->load->view('admin/Edit_perusahaan', $data);
	}


	//Ganti Status Persetujuan
	public function ganti_status($id)
	{

		$data['pengajuan'] = $this->Daftar_model->lihat_pengajuan($id)->row();
		$this->load->view('admin/Ganti_status', $data);
	}

	//methode form edit simpan database
	public function edit_simpan($id)
	{

		$data = array(
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			'role' => $this->input->post('role'),
		);

		if ($this->Daftar_model->update_pengguna($data, $id) == TRUE) {
			$this->session->set_flashdata('edit_pengguna', true);
		} else {
			$this->session->set_flashdata('edit_pengguna', false);
		}

		redirect(base_url('Admin/Dashboard/daftar_pengguna'));
	}

	public function edit_simpan_jurusan($id)
	{

		$data = array(
			'jurusan' => $this->input->post('jurusan')
		);


		if ($this->Daftar_model->update_jurusan($data, $id) == TRUE) {
			$this->session->set_flashdata('edit_jurusan', true);
		} else {
			$this->session->set_flashdata('edit_jurusan', false);
		}

		redirect(base_url('Admin/Dashboard/daftar_jurusan'));
	}

	public function edit_simpan_guru($id)
	{

		$data = array(
			'name_guru' => $this->input->post('name_guru'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'email' => $this->input->post('email'),
		);

		if ($this->Daftar_model->update_guru($data, $id) == TRUE) {
			$this->session->set_flashdata('edit_guru', true);
		} else {
			$this->session->set_flashdata('edit_guru', false);
		}

		redirect(base_url('Admin/Dashboard/daftar_guru'));
	}

	public function edit_simpan_perusahaan($id)
	{

		$data = array(
			'nama_perusahaan' => $this->input->post('nama_perusahaan'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'rekomendasi' => $this->input->post('rekomendasi'),
		);

		if ($this->Daftar_model->update_perusahaan($data, $id) == TRUE) {
			$this->session->set_flashdata('edit_perusahaan', true);
		} else {
			$this->session->set_flashdata('edit_perusahaan', false);
		}

		redirect(base_url('Admin/Dashboard/daftar_perusahaan'));
	}


	//methode form ganti dan simpan status
	public function ganti_status_simpan($id)
	{

		$data = array(
			'status' => $this->input->post('status')
		);

		if ($this->Daftar_model->update_pengajuan($data, $id) == TRUE) {
			$this->session->set_flashdata('ganti_status', true);
		} else {
			$this->session->set_flashdata('ganti_status', false);
		}

		redirect(base_url('Admin/Dashboard/daftar_pengajuan'));
	}


	//methode from hapus
	public function hapus($id)
	{

		if ($this->Daftar_model->hapus_pengguna($id) == TRUE) {

			$this->session->set_flashdata('hapus_pengguna', true);
		} else {
			$this->session->set_flashdata('hapus_pengguna', false);
		}

		redirect(base_url('Admin/Dashboard/daftar_pengguna'));
	}

	public function hapus_jurusan($id)
	{

		if ($this->Daftar_model->hapus_jurusan($id) == TRUE) {

			$this->session->set_flashdata('hapus_jurusan', true);
		} else {
			$this->session->set_flashdata('hapus_jurusan', false);
		}

		redirect(base_url('Admin/Dashboard/daftar_jurusan'));
	}

	public function hapus_guru($id)
	{

		if ($this->Daftar_model->hapus_guru($id) == TRUE) {

			$this->session->set_flashdata('hapus_guru', true);
		} else {
			$this->session->set_flashdata('hapus_guru', false);
		}

		redirect(base_url('Admin/Dashboard/daftar_jurusan'));
	}

	public function hapus_perusahaan($id)
	{

		if ($this->Daftar_model->hapus_perusahaan($id) == TRUE) {

			$this->session->set_flashdata('hapus_perusahaan', true);
		} else {
			$this->session->set_flashdata('hapus_perusahaan', false);
		}

		redirect(base_url('Admin/Dashboard/daftar_perusahaan'));
	}

	public function hapus_pengajuan($id)
	{

		if ($this->Daftar_model->hapus_pengajuan($id) == TRUE) {
			$this->session->set_flashdata('hapus_pengajuan', true);
		} else {
			$this->session->set_flashdata('hapus_pengajuan', false);
		}

		redirect(base_url('Admin/Dashboard/daftar_pengajuan'));
	}


	//methode Kirim Email
	public function kirim_email()
	{
		$this->load->view('admin/Kirim_email');
	}

	public function send()
	{
		$this->load->library('mailer');

		$email_penerima = $this->input->post('email_penerima');
		$subjek = $this->input->post('subjek');
		$pesan = $this->input->post('pesan');
		$attachment = $_FILES['attachment'];
		$content = $this->load->view('admin/content', array('pesan' => $pesan), true); // Ambil isi file content.php dan masukan ke variabel $content
		$sendmail = array(
			'email_penerima' => $email_penerima,
			'subjek' => $subjek,
			'content' => $content,
			'attachment' => $attachment
		);

		if (empty($attachment['name'])) { // Jika tanpa attachment
			$send = $this->mailer->send($sendmail); // Panggil fungsi send yang ada di librari Mailer
		} else { // Jika dengan attachment
			$send = $this->mailer->send_with_attachment($sendmail); // Panggil fungsi send_with_attachment yang ada di librari Mailer
		}

		// echo "<b>" . $send['status'] . "</b><br />";
		// echo $send['message'];
		// echo "<br /><a href='" . base_url("Admin/Dashboard/kirim_email") . "'>Kembali ke Form</a>";

		echo "<script>
			alert('$send[status], $send[message]');
			window.location='" . site_url('Admin/Dashboard/kirim_email') . "';
		 </script>";
	}

	//methode print surat
	public function print_surat()
	{
		$this->load->view('admin/Print_surat');
	}

	//methode form search 
	public function search_user()
	{
		$keyword = $this->input->post('keyword');
		$this->db->like('username', $keyword);
		$this->db->or_like('email', $keyword);
		$this->db->or_like('role', $keyword);
		// $this->db->or_like('tgl_dibuat', $keyword);
		$this->db->or_like('akses', $keyword);
		$query['user'] = $this->db->get('user')->result();
		$this->load->view('admin/Daftar_pengguna', $query);
	}

	public function search_guru()
	{
		$keyword = $this->input->post('keyword');
		$this->db->like('id_guru', $keyword);
		$this->db->or_like('name_guru', $keyword);
		$this->db->or_like('jenis_kelamin', $keyword);
		$this->db->or_like('email', $keyword);
		$query['guru'] = $this->db->get('guru')->result();
		$this->load->view('admin/Daftar_guru', $query);
	}

	public function search_jurusan()
	{
		$keyword = $this->input->post('keyword');
		$this->db->like('id_jurusan', $keyword);
		$this->db->or_like('jurusan', $keyword);
		$query['jurusan'] = $this->db->get('jurusan')->result();
		$this->load->view('admin/Daftar_jurusan', $query);
	}

	public function search_pengajuan()
	{
		$keyword = $this->input->post('keyword');
		$this->db->like('nama_lengkap', $keyword);
		$this->db->or_like('kelas', $keyword);
		$this->db->or_like('nama_perusahaan', $keyword);
		$this->db->or_like('alamat_perusahaan', $keyword);
		// $this->db->or_like('waktu_upload', $keyword);
		// $this->db->or_like('keterangan', $keyword);
		$this->db->or_like('status', $keyword);
		$query['pengajuan'] = $this->db->get('pengajuan')->result();
		$this->load->view('admin/Daftar_pengajuan', $query);
	}
	public function search_perusahaan()
	{
		$keyword = $this->input->post('keyword');
		$this->db->like('id_perusahaan', $keyword);
		$this->db->or_like('nama_perusahaan', $keyword);
		$this->db->or_like('alamat', $keyword);
		$this->db->or_like('email', $keyword);
		$this->db->or_like('rekomendasi', $keyword);
		$query['perusahaan'] = $this->db->get('perusahaan')->result();
		$this->load->view('admin/Daftar_perusahaan', $query);
	}
}