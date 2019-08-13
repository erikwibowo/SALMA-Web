<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Syslogin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index(){
		$data['title'] = "SALMA";
		$data['subtitle'] = "Sistem Aplikasi Monitoring Kinerja Bersama";
		$this->load->view('login', $data);
	}

	public function auth(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$auth = $this->Madmin->auth($username);

		if ($auth->num_rows() == 1) {
			foreach ($auth->result() as $row) {
				$pass = $row->password;
				$aktif = $row->aktif;
			}
			if ($aktif == 1) {
				if (password_verify($password, $pass)) {
					foreach ($auth->result() as $key) {
						$data_session = array(
							'id_admin'			=> $key->id_admin,
							'nama_admin'			=> $key->nama_admin,
							'alamat_admin'		=> $key->alamat_admin,
							'wa_admin'			=> $key->wa_admin,
							'login'				=> "berhasil"
						);
						$this->session->set_userdata($data_session);
						redirect('admin','refresh');
					}
				}else{
					$this->session->set_flashdata('notif', 'Nomor Telepon & Kata sandi tidak cocok. Silahkan coba lagi.');
					$this->session->set_flashdata('type', 'danger');
					redirect('syslogin','refresh');
				}
			}else{
				$this->session->set_flashdata('notif', 'Akun anda telah dinonaktifkan. Silahkan hubungi administrator');
				$this->session->set_flashdata('type', 'danger');
				redirect('syslogin','refresh');
			}
			
		}else{
			$this->session->set_flashdata('notif', 'Nomor Telepon & Kata sandi tidak cocok. Silahkan coba lagi.');
			$this->session->set_flashdata('type', 'danger');
			redirect('syslogin','refresh');
		}


	}

	public function logout(){
		$data_session = array(
			'id_admin',
			'nama_admin',
			'alamat_admin',
			'wa_admin',
			'login'
		);
		$this->session->unset_userdata($data_session);
		redirect('syslogin','refresh');
	}

}

/* End of file Syslogin.php */
/* Location: ./application/views/Syslogin.php */