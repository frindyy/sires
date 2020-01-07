<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_fasilitas extends CI_Model {

	public function get_fasilitas(){

	}	

	 public function kode_fasilitas()   {    
      $this->db->select('RIGHT(tb_fasilitas.id_fasilitas,2) as kode', FALSE);
      $this->db->order_by('id_fasilitas','DESC');    
      $this->db->limit(1);    
      $query = $this->db->get('tb_fasilitas');      //cek dulu apakah ada sudah ada kode di tabel.    
      if($query->num_rows() <> 0){      
       //jika kode ternyata sudah ada.      
       $data = $query->row();      
       $kode = intval($data->kode) + 1;    
      }
      else{      
       //jika kode belum ada      
       $kode = 1;    
      }
      $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);    
      $kodejadi = "KDFA-".$kodemax;    
      return $kodejadi;  
     }

     public function insert_fasilitas($data){
     	$this->db->insert('tb_fasilitas',$data);
     }

     public function foto_fasilitas($data){
     	$this->db->insert('tb_gambar_fasilitas',$data);
   //   	$last_id = $this->db->query('select kode_penjualan from penjualan order by kode_penjualan desc')->row_array();
	 	// $this->db->query('update detail_penjualan set kode_penjualan="'.$last_id['kode_penjualan'].'" where status="0"');
	 	// $this->db->query('update detail_penjualan set status="1" where status="0"');
     }

}

/* End of file m_fasilitas.php */
/* Location: ./application/models/backend/m_fasilitas.php */