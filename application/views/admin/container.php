<?php
	if ($content == "dashboard") {
		$this->load->view('admin/dashboard');
	}elseif ($content == "data-admin") {
		$this->load->view('admin/tabel');
	}elseif ($content == "data-pengguna") {
		$this->load->view('admin/tabel');
	}elseif ($content == "data-kegiatan") {
		$this->load->view('admin/tabel');
	}
?>