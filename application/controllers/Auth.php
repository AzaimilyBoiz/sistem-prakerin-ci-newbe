<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation', true);
	}


	//methode utama halaman login
	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$recaptcha = $this->input->post('g-recaptcha-response');
		$response = $this->recaptcha->verifyResponse($recaptcha);

		if ($this->form_validation->run() == FALSE || !isset($response['success']) || $response['success'] <> true) {

			$data = array(
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'captcha' => $this->recaptcha->getWidget(),
				'script_captcha' => $this->recaptcha->getScriptTag(),
			);

			$this->load->view('Login', $data);
		} else {
			//validasi sukses
			$this->_login();
		}
	}


	//methode private login
	private function _login()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['username' => $username])->row_array();


		//user ada
		if ($user) {
			//jika user aktif
			if ($user['akses'] == 1) {
				if (password_verify($password, $user['password'])) {
					$data = [
						'username' =>  $user['username'],
						'role' => $user['role']
					];

					$this->session->set_userdata($data);
					if ($user['role'] == 1) {
						redirect('Admin/Dashboard/daftar_pengajuan');
					} else {
						redirect('siswa/Dashboard');
					}
				} else {

					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
					redirect('Auth');
				}
			} else {
				//gagal login
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum diaktivasi!!!</div>');
				redirect('Auth');
			}
		} else {

			//gagal login
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak ditemukan!</div>');
			redirect('Auth');
		}
	}


	//methode untuk registrasi
	public function registrasi()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'This email has registered!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[5]|matches[password1]');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('Registrasi');
		} else {

			$email = $this->input->post('email', true);
			$data = [
				'username' => htmlspecialchars($this->input->post('username', true)),
				'email' => htmlspecialchars($email),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role' => 2,
				'akses' => 2
			];

			//siapkan token
			$token = base64_encode(random_bytes(32));
			$user_token = [
				'email' => $email,
				'token' => $token,
				'tgl_dibuat' => time()
			];

			$this->db->insert('user', $data);
			$this->db->insert('user_token', $user_token);

			$this->_kirimEmail($token, 'verify');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun berhasil dibuat. Silahkan Aktivasi!!</div>');
			redirect('auth');
		}
	}


	//methode kirim email token verifikasi
	private function _kirimEmail($token, $type)
	{
		$config = [
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_user' => 'suklioaoe@gmail.com',
			'smtp_pass' => 'uzumakinaruto',
			'smtp_port' => 465,
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'newline'   => "\r\n"
		];




		$this->load->library('email', $config);
		$this->email->initialize($config);

		$this->email->from('suklioaoe@gmail.com', 'Sistem Informasi PKL');
		$this->email->to($this->input->post('email'));

		if ($type == 'verify') {

			$this->email->subject('Account Verification');
			$this->email->message('Click this link to verify you account : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a> ');
		} else if ($type == 'forgot') {

			$this->email->subject('Reset Password');
			$this->email->message('Click this link to reset your password : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a> ');
		}

		if ($this->email->send()) {

			return true;
		} else {

			echo $this->email->print_debugger();
			die;
		}
	}

	//methode verifikasi login
	public function verify()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($user) {

			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

			if ($user_token) {


				if (time() - $user_token['tgl_dibuat'] < (60 * 60 * 1)) {

					$this->db->set('akses', 1);
					$this->db->where('email', $email);
					$this->db->update('user');

					$this->db->delete('user_token', ['email' => $email]);
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Sudah Di Aktivas Silahkan Login!!</div>');
					redirect('auth');
				} else {

					$this->db->delete('user', ['email' => $email]);
					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Token Kadaluarsa!!</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Token Tidak Valid!!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi akun gagal!</div>');
			redirect('auth');
		}
	}

	//methode logout
	public function logout()
	{

		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun berhasil keluar!!</div>');
		redirect('auth');
	}

	//methode lupa password
	public function forgotpassword()
	{

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		if ($this->form_validation->run() == false) {

			$this->load->view('Forgot_password');
		} else {
			$email = $this->input->post('email');
			$user = $this->db->get_where('user', ['email' => $email, 'akses' => 1])->row_array();

			if ($user) {
				$token = base64_encode(random_bytes(32));
				$user_token = [
					'email' => $email,
					'token' => $token,
					'tgl_dibuat' => time()
				];

				$this->db->insert('user_token', $user_token);
				$this->_kirimEmail($token, 'forgot');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan Cek Email Anda!!!</div>');
				redirect('Auth/forgotpassword');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email atau Akses Belum Diregistrasi!!!</div>');
				redirect('Auth/forgotpassword');
			}
		}
	}

	//methode reset password
	public function resetpassword()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();
		if ($user) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

			if ($user_token) {
				$this->session->set_userdata('reset_email', $email);
				$this->changepassword();
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Reset Password! Token Salah!!!</div>');
				redirect('Auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Reset Password! Email Salah!!!</div>');
			redirect('Auth');
		}
	}

	//methode rubah password
	public function changepassword()
	{

		if (!$this->session->userdata('reset_email')) {
			redirect('Auth');
		}
		$this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[5]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[5]|matches[password1]');
		if ($this->form_validation->run() == false) {

			$this->load->view('Change_password');
		} else {
			$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
			$email = $this->session->userdata('reset_email');

			$this->db->set('password', $password);
			$this->db->where('email', $email);
			$this->db->update('user');

			$this->session->unset_userdata('reset_email');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Telah Dirubah! Silahkan Login!!!</div>');
			redirect('Auth');
		}
	}
}