<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkegiatan extends CI_Model {

	public function read(){
		$this->db->select('a.id_kegiatan, a.id_user, b.nama_user, a.nama_kegiatan, a.keterangan_kegiatan, a.dibuat, (select count(id_kegiatan) from tb_foto where id_kegiatan = a.id_kegiatan) as jml_foto');
		$this->db->join('tb_user b', 'a.id_user = b.id_user');
		$this->db->order_by('a.dibuat', 'desc');
		return $this->db->get('tb_kegiatan a');
	}

	public function readToday(){
		$this->db->select('a.id_kegiatan, a.id_user, b.nama_user, a.nama_kegiatan, a.keterangan_kegiatan, a.dibuat, (select count(id_kegiatan) from tb_foto where id_kegiatan = a.id_kegiatan) as jml_foto');
		$this->db->join('tb_user b', 'a.id_user = b.id_user');
		$this->db->where('a.dibuat', 'CURDATE()');
		$this->db->order_by('a.dibuat', 'desc');
		return $this->db->get('tb_kegiatan a');
	}

	public function update($data, $id_kegiatan){
		$this->db->where('id_kegiatan', $id_user);
		return $this->db->update('tb_kegiatan', $data);
	}

	public function delete($data, $id_kegiatan){
		$this->db->where('id_kegiatan', $id_user);
		return $this->db->delete('tb_kegiatan');
	}

	public function insert($data){
		return $this->db->insert('tb_kegiatan', $data);
	}

}

/* End of file Mkegiatan.php */
/* Location: ./application/models/Mkegiatan.php */