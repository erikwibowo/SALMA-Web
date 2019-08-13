<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {

	public function auth($wa){
		$this->db->where('wa_admin', $wa);
		return $this->db->get('tb_admin');
	}

	public function read(){
		return $this->db->get('tb_admin');
	}

	public function update($data, $id_admin){
		$this->db->where('id_admin', $id_admin);
		return $this->db->update('tb_admin', $data);
	}

	public function delete($id_admin){
		$this->db->where('id_admin', $id_admin);
		return $this->db->delete('tb_admin');
	}

	public function insert($data){
		return $this->db->insert('tb_admin', $data);
	}

}

/* End of file Madmin.php */
/* Location: ./application/models/Madmin.php */