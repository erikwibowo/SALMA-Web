<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpengguna extends CI_Model {

	public function read(){
		return $this->db->get('tb_user');
	}

	public function update($data, $id_user){
		$this->db->where('id_user', $id_user);
		return $this->db->update('tb_user', $data);
	}

	public function delete($id_user){
		$this->db->where('id_user', $id_user);
		return $this->db->delete('tb_user');
	}

	public function insert($data){
		return $this->db->insert('tb_user', $data);
	}

}

/* End of file Mpengguna.php */
/* Location: ./application/models/Mpengguna.php */