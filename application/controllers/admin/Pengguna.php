<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mpengguna');
		
		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'danger');
			redirect('','refresh');
		}
	}

	public function index(){
		$data['title']			= "Data Pengguna - Admin SALMA Kabupaten Pekalongan";
		$data['subtitle']		= "Data Pengguna";
		$data['content']		= "data-pengguna";
		$data['master']			= "active";
		$data['pengguna']			= "active";
		$data['data']			= $this->Mpengguna->read()->result();
		$this->load->view('admin/index', $data);
	}

	public function insert(){
		$data = array(
			'nama_user'		=> $this->input->post('nama_user'),
			'alamat_user'		=> $this->input->post('alamat_user'),
			'wa_user'			=> $this->input->post('wa_user'),
			'password'			=> password_hash($this->input->post('password'), PASSWORD_DEFAULT)
		);
		$this->Mpengguna->insert($data);
		$this->session->set_flashdata('notif', 'Data Pengguna berhasil ditambahkan');
		$this->session->set_flashdata('type', 'success');
		redirect('admin/pengguna','refresh');
	}

	public function update(){
		$data = array(
			'nama_user'		=> $this->input->post('nama_user'),
			'alamat_user'		=> $this->input->post('alamat_user'),
			'wa_user'			=> $this->input->post('wa_user'),
			'password'			=> password_hash($this->input->post('password'), PASSWORD_DEFAULT)
		);
		$this->Mpengguna->update($data, $this->input->post('id_user'));
		$this->session->set_flashdata('notif', 'Data Pengguna berhasil diubah');
		$this->session->set_flashdata('type', 'success');
		redirect('admin/pengguna','refresh');
	}

	public function aktifkan($id){
		$data = array(
			'aktif'		=> 1,
		);
		$this->Mpengguna->update($data, $id);
		$this->session->set_flashdata('notif', 'Data Pengguna berhasil diaktifkan');
		$this->session->set_flashdata('type', 'success');
		redirect('admin/pengguna','refresh');
	}

	public function non_aktifkan($id){
		$data = array(
			'aktif'		=> 0,
		);
		$this->Mpengguna->update($data, $id);
		$this->session->set_flashdata('notif', 'Data Pengguna berhasil dinon aktifkan');
		$this->session->set_flashdata('type', 'success');
		redirect('admin/pengguna','refresh');
	}

	public function delete($id){
		$this->Mpengguna->delete($id);
		$this->session->set_flashdata('notif', 'Data Pengguna berhasil dihapus');
		$this->session->set_flashdata('type', 'success');
		redirect('admin/pengguna','refresh');
	}

}

/* End of file Pengguna.php */
/* Location: ./application/controllers/admin/Pengguna.php */