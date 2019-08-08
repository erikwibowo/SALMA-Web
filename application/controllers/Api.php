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
		$id_user = $this->input->get('id_user');

		$perpage = 10;
		$limit = $perpage*$this->input->get('halaman');
		$offset = $limit - $perpage;

		//echo "limit ".$limit." offset ".$offset;

		echo json_encode($this->Mapi->kegiatan($id_user, $limit, $offset)->result());
	}

	public function foto_by_id($id_kegiatan){
		echo json_encode($this->Mapi->fotoByKegiatan($id_kegiatan)->result());
	}

	public function kegiatan_save(){
		$keg = $this->Mapi->getIdKegiatan();
		if ($keg->num_rows() == 0) {
			$idkegiatan = "KEG-".date("ymd")."001";
		}else{
			foreach ($keg->result() as $key) {
				$idkegs = substr($key->id_kegiatan, 10, 3)+1;
			}
			if (strlen($idkegs) == "1") {
				$idkegiatan = "KEG-".date("ymd")."00".$idkegs;
			}elseif (strlen($idkegs) == "2") {
				$idkegiatan = "KEG-".date("ymd")."0".$idkegs;
			}else{
				$idkegiatan = "KEG-".date("ymd").$idkegs;
			}
		}

		$nama_kegiatan = $this->input->post('nama_kegiatan');
		$keterangan_kegiatan = $this->input->post('keterangan_kegiatan');
		$id_user = $this->input->post('id_user');
		$jml_foto = $this->input->post('jml_foto');

		$data = array(
			"id_kegiatan"			=> $idkegiatan,
			"nama_kegiatan"			=> $nama_kegiatan,
			"keterangan_kegiatan"	=> $keterangan_kegiatan,
			"id_user"				=> $id_user
		);
		if($this->Mapi->kegiatan_insert($data)){
			for ($i = 1; $i <= $jml_foto ; $i++) { 
				$nama_foto = $idkegiatan."-".$i.".jpg";
				$file_foto = $this->input->post('foto'.$i);
				$path = "files/kegiatan/".$nama_foto;
				file_put_contents($path, base64_decode($file_foto));

				$data_foto = array(
					"id_kegiatan"	=> $idkegiatan,
					"foto"			=> $nama_foto
				);

				$this->Mapi->foto_insert($data_foto);
			}
			$response = array(
				"code"	=> 1
			);
		}else{
			$response = array(
				"code"	=> 0
			);
		}

		echo json_encode($response);

	}

	public function hapus_kegiatan(){
		$path = "files/kegiatan/";
		$id_kegiatan = $this->input->post('id_kegiatan');
		if ($this->Mapi->hapus_kegiatan($id_kegiatan)) {
			foreach ($this->Mapi->fotoByKegiatan($id_kegiatan)->result() as $key) {
				unlink($path.$key->foto);
				$this->Mapi->hapus_foto($id_kegiatan);
			}
			$response = array(
				'code'	=> 1
			);
		}else{
			$response = array(
				'code'	=> 0
			);
		}

		echo json_encode($response);
	}

}

/* End of file Api.php */
/* Location: ./application/controllers/Api.php */