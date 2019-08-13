<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
		
		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'danger');
			redirect('','refresh');
		}
	}

	public function index(){
		$data['title']			= "Data Admin - Admin SALMA Kabupaten Pekalongan";
		$data['subtitle']		= "Data Admin";
		$data['content']		= "data-admin";
		$data['b1']				= "Data Admin";
		$data['b1a']			= "#";
		$data['jumlah']			= 1;
		$data['master']			= "active";
		$data['admin']			= "active";
		$data['data']			= $this->Madmin->read()->result();
		$this->load->view('admin/index', $data);
	}

	public function insert(){
		$data = array(
			'nama_admin'		=> $this->input->post('nama_admin'),
			'alamat_admin'		=> $this->input->post('alamat_admin'),
			'wa_admin'			=> $this->input->post('wa_admin'),
			'password'			=> password_hash($this->input->post('password'), PASSWORD_DEFAULT)
		);
		$this->Madmin->insert($data);
		$this->session->set_flashdata('notif', 'Data Admin berhasil ditambahkan');
		$this->session->set_flashdata('type', 'success');
		redirect('admin/admin','refresh');
	}

	public function update(){
		$data = array(
			'nama_admin'		=> $this->input->post('nama_admin'),
			'alamat_admin'		=> $this->input->post('alamat_admin'),
			'wa_admin'			=> $this->input->post('wa_admin'),
			'password'			=> password_hash($this->input->post('password'), PASSWORD_DEFAULT)
		);
		$this->Madmin->update($data, $this->input->post('id_admin'));
		$this->session->set_flashdata('notif', 'Data Admin berhasil diubah');
		$this->session->set_flashdata('type', 'success');
		redirect('admin/admin','refresh');
	}

	public function aktifkan($id){
		$data = array(
			'aktif'		=> 1,
		);
		$this->Madmin->update($data, $id);
		$this->session->set_flashdata('notif', 'Data Admin berhasil diaktifkan');
		$this->session->set_flashdata('type', 'success');
		redirect('admin/admin','refresh');
	}

	public function non_aktifkan($id){
		$data = array(
			'aktif'		=> 0,
		);
		$this->Madmin->update($data, $id);
		$this->session->set_flashdata('notif', 'Data Admin berhasil dinon aktifkan');
		$this->session->set_flashdata('type', 'success');
		redirect('admin/admin','refresh');
	}

	public function delete($id){
		$this->Madmin->delete($id);
		$this->session->set_flashdata('notif', 'Data Admin berhasil dihapus');
		$this->session->set_flashdata('type', 'success');
		redirect('admin/admin','refresh');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/admin/Admin.php */