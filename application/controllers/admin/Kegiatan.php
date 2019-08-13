<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mkegiatan');
		
		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'danger');
			redirect('','refresh');
		}
	}

	public function index(){
		$data['title']			= "Data Kegiatan - Admin SALMA Kabupaten Pekalongan";
		$data['subtitle']		= "Data Kegiatan";
		$data['content']		= "data-kegiatan";
		$data['b1']				= "Data Kegiatan";
		$data['b1a']			= "#";
		$data['jumlah']			= 1;
		$data['kegiatan']			= "active";
		$data['semua']			= "active";
		$data['data']			= $this->Mkegiatan->read()->result();
		$this->load->view('admin/index', $data);
	}

	public function hari_ini(){
		$data['title']			= "Data Kegiatan Hari Ini - Admin SALMA Kabupaten Pekalongan";
		$data['subtitle']		= "Data Kegiatan Hari Ini";
		$data['content']		= "data-kegiatan";
		$data['b1']				= "Data Kegiatan Hari Ini";
		$data['b1a']			= "#";
		$data['jumlah']			= 1;
		$data['kegiatan']			= "active";
		$data['hari_ini']			= "active";
		$data['data']			= $this->Mkegiatan->readToday()->result();
		$this->load->view('admin/index', $data);
	}

	public function delete($id){
		$this->Madmin->delete($id);
		$this->session->set_flashdata('notif', 'Data Admin berhasil dihapus');
		$this->session->set_flashdata('type', 'success');
		redirect('admin/admin','refresh');
	}

}

/* End of file Kegiatan.php */
/* Location: ./application/controllers/admin/Kegiatan.php */