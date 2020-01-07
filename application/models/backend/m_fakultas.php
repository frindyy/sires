<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_fakultas extends CI_Model {

	public function get_fakultas(){
		return $this->db->get('tb_fakultas');
	}

	public function get_fakultas_id($id_fakultas){
		// $hsl = $this->db->get_where('tb_fakultas',['id_fakultas',$id_fakultas]);
		$this->db->select('*');
		$this->db->from('tb_fakultas');
		$this->db->where('id_fakultas',$id_fakultas);
		$hsl = $this->db->get();
		if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_fakultas' => $data->id_fakultas,
                    'nm_fakultas' => $data->nm_fakultas
                    );
            }
        }
        return $hasil;
	}

	public function update_fakultas_id($id_fakultas,$data){
		$this->db->where('id_fakultas',$id_fakultas);
		$this->db->update('tb_fakultas',$data);
	}

}

/* End of file m_fakultas.php */
/* Location: ./application/models/backend/m_fakultas.php */