<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_daftar extends CI_Model {

	public function get_fakultas(){
		$this->db->order_by('nm_fakultas','asc');
		return $this->db->get('tb_fakultas');
	}

	public function get_jurusan($id_fakultas){
		$this->db->select('*');
		$this->db->from('tb_jurusan');
		$this->db->where('id_fakultas',$id_fakultas);
		return $this->db->get();
	}

}

/* End of file m_daftar.php */
/* Location: ./application/models/frontend/m_daftar.php */