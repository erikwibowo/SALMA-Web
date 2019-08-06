<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapi extends CI_Model {

	public function auth($wa_user){
		$this->db->where('wa_user', $wa_user);
		return $this->db->get('tb_user');
	}

	public function kegiatan($id_user, $limit, $offset){
		$this->db->select('a.id_kegiatan, a.id_user, b.nama_user, a.nama_kegiatan, a.keterangan_kegiatan, a.dibuat, (select count(id_kegiatan) from tb_foto where id_kegiatan = a.id_kegiatan) as jml_foto');
		$this->db->join('tb_user b', 'a.id_user = b.id_user');
		$this->db->where('a.id_user', $id_user);
		return $this->db->get('tb_kegiatan a', $limit, $offset);
	}

	public function allkegiatan($id_user){
		$this->db->where('id_user', $id_user);
		return $this->db->get('tb_kegiatan');
	}
}

/* End of file Mapi.php */
/* Location: ./application/models/Mapi.php */