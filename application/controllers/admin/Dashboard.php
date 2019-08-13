<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'danger');
			redirect('','refresh');
		}
	}

	public function index(){
		$data['title']		= "Admin SALMA - Kabupaten Pekalongan";
		$data['subtitle']		= "Dashboard";
		$data['content']	= "dashboard";
		$data['dashboard']	= "active";
		$this->load->view('admin/index', $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */