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
		$this->db->order_by('dibuat', 'desc');
		return $this->db->get('tb_kegiatan a', $limit, $offset);
	}

	public function kegiatan_insert($data){
		return $this->db->insert('tb_kegiatan', $data);
	}

	public function allkegiatan($id_user){
		$this->db->where('id_user', $id_user);
		$this->db->order_by('dibuat', 'desc');
		return $this->db->get('tb_kegiatan');
	}

	public function getIdKegiatan(){
		return $this->db->query("SELECT id_kegiatan FROM tb_kegiatan WHERE DATE(dibuat) = CURDATE() ORDER BY id_kegiatan DESC LIMIT 1");
	}

	public function foto_insert($data){
		return $this->db->insert('tb_foto', $data);
	}

	public function fotoByKegiatan($id_kegiatan){
		$this->db->where('id_kegiatan', $id_kegiatan);
		return $this->db->get('tb_foto');
	}

	public function hapus_kegiatan($id_kegiatan){
		$this->db->where('id_kegiatan', $id_kegiatan);
		return $this->db->delete('tb_kegiatan');
	}

	public function hapus_foto($id_kegiatan){
		$this->db->where('id_kegiatan', $id_kegiatan);
		return $this->db->delete('tb_foto');
	}

}

/* End of file Mapi.php */
/* Location: ./application/models/Mapi.php */