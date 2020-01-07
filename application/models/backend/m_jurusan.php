<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jurusan extends CI_Model {

	public function get_jurusan(){
		$this->db->order_by('tb_fakultas.nm_fakultas','asc');
		$this->db->select('tb_jurusan.id_jurusan,tb_jurusan.nm_jurusan,tb_fakultas.nm_fakultas');
		$this->db->from('tb_jurusan');
		$this->db->join('tb_fakultas','tb_fakultas.id_fakultas=tb_jurusan.id_fakultas');
		return $this->db->get();
	}

	public function get_jurusan_id($id_jurusan){
		// $hsl = $this->db->get_where('tb_fakultas',['id_fakultas',$id_fakultas]);
		$this->db->select('tb_jurusan.id_jurusan,tb_jurusan.nm_jurusan,tb_fakultas.id_fakultas,tb_fakultas.nm_fakultas');
		$this->db->from('tb_jurusan');
		$this->db->join('tb_fakultas','tb_fakultas.id_fakultas=tb_jurusan.id_fakultas');
		$this->db->where('id_jurusan',$id_jurusan);
		$hsl = $this->db->get();
		if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_jurusan' => $data->id_jurusan,
                    'id_fakultas' => $data->id_fakultas,
                    'nm_jurusan' => $data->nm_jurusan
                    );
            }
        }
        return $hasil;
	}

	public function update_jurusan_id($id_jurusan,$data){
		$this->db->where('id_jurusan',$id_jurusan);
		$this->db->update('tb_jurusan',$data);
	}

	public function hapus_jurusan_id($id_jurusan){
		$this->db->where('id_jurusan',$id_jurusan);
		$this->db->delete('tb_jurusan');
	}

}

/* End of file m_jurusan.php */
/* Location: ./application/models/backend/m_jurusan.php */