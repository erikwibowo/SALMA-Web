<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapi extends CI_Model {

	public function auth($wa_user){
		$this->db->where('wa_user', $wa_user);
		return $this->db->get('tb_user');
	}

	public function kegiatan($id_user){
		$this->db->where('id_user', $id_user);
		return $this->db->get('tb_kegiatan');
	}

}

/* End of file Mapi.php */
/* Location: ./application/models/Mapi.php */