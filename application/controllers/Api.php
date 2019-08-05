<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mapi');
	}

	public function index(){
		echo "Restricted";
	}

	public function auth(){
		$wa_user = $this->input->post('wa_user');
		$password = $this->input->post('password');

		$auth = $this->Mapi->auth($wa_user);

		if ($auth->num_rows() > 0) {
			foreach ($auth->result() as $key) {
				$pass = $key->password;
				$aktif = $key->aktif;
				$nama_user = $key->nama_user;
				$id_user = $key->id_user;
			}
			if (password_verify($password, $pass)) {
				if ($aktif) {
					$response = array(
						"code"		=> 1,
						"message"	=> "Login Berhasil",
						"id_user"	=> $id_user,
						"nama_user"	=> $nama_user
					);
				}else{
					$response = array(
						"code"		=> 2,
						"message"	=> "Akun anda tidak aktif. Silahkan hubungi Administrator"
					);
				}
			}else{
				$response = array(
					"code"		=> 0,
					"message"	=> "No. Wa dan Password tidak cocok. Silahkan periksa kembali"
				);
			}
		}else{
			$response = array(
				"code"		=> 0,
				"message"	=> "No. Wa dan Password tidak cocok. Silahkan periksa kembali"
			);
		}

		echo json_encode($response);
	}

	public function kegiatan(){
		$this->input->get('id_user');
		echo json_encode($this->Mapi->kegiatan(id_user)->result());
	}

}

/* End of file Api.php */
/* Location: ./application/controllers/Api.php */