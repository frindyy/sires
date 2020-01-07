<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_fasilitas extends CI_Model {

	public function get_image_fasilitas(){
		$this->db->select('tb_gambar_fasilitas.id_fasilitas,tb_gambar_fasilitas.foto_fasilitas,tb_fasilitas.nm_fasilitas');
		$this->db->from('tb_gambar_fasilitas');
		$this->db->join('tb_fasilitas','tb_fasilitas.id_fasilitas=tb_gambar_fasilitas.id_fasilitas');
		$this->db->group_by('id_fasilitas');
		return $this->db->get();
	}

	public function get_all_image($id_fasilitas){
		$this->db->select('tb_gambar_fasilitas.id_fasilitas,tb_gambar_fasilitas.foto_fasilitas,tb_fasilitas.nm_fasilitas');
		$this->db->from('tb_gambar_fasilitas');
		$this->db->join('tb_fasilitas','tb_fasilitas.id_fasilitas=tb_gambar_fasilitas.id_fasilitas');
		$this->db->where('tb_gambar_fasilitas.id_fasilitas',$id_fasilitas);
		return $this->db->get();
	}

	public function get_all_fasilitas($id_fasilitas){
		$this->db->where('id_fasilitas',$id_fasilitas);
		return $this->db->get('tb_fasilitas');
	}

}

/* End of file m_fasilitas.php */
/* Location: ./application/models/frontend/m_fasilitas.php */