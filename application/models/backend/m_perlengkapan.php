<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_perlengkapan extends CI_Model {

	public function get_perlengkapan(){
		return $this->db->get('tb_perlengkapan');
	}

	public function get_perlengkapan_id($id_perlengkapan){
		$this->db->select('*');
		$this->db->from('tb_perlengkapan');
		$this->db->where('id_perlengkapan',$id_perlengkapan);
		$hsl = $this->db->get();
		if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_perlengkapan' => $data->id_perlengkapan,
                    'nm_perlengkapan' => $data->nm_perlengkapan,
                    'satuan' => $data->satuan,
                    'harga' => $data->harga
                    );
            }
        }
        return $hasil;
	}

	public function update_perlengkapan_id($id_perlengkapan,$data){
		$this->db->where('id_perlengkapan',$id_perlengkapan);
		$this->db->update('tb_perlengkapan',$data);
	}

}

/* End of file m_perlengkapan.php */
/* Location: ./application/models/backend/m_perlengkapan.php */