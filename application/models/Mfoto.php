<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mfoto extends CI_Model {

	public function read(){
		rerurn $this->db->get('tb_foto');
	}

	public function update($data, $id_foto){
		$this->db->where('id_foto', $id_foto);
		return $this->db->update('tb_foto', $data);
	}

	public function delete($data, $id_foto){
		$this->db->where('id_foto', $id_foto);
		return $this->db->delete('tb_foto');
	}

	public function insert($data){
		return $this->db->insert('tb_foto', $data);	
	}

}

/* End of file Mfoto.php */
/* Location: ./application/models/Mfoto.php */