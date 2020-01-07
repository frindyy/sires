<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengguna extends CI_Model {

	public function get_pengguna(){
		$this->db->select('tb_user.id_user,tb_role.nm_role,tb_user.nama_user,tb_user.jenis_kelamin');
		$this->db->from('tb_user');
		$this->db->join('tb_role','tb_role.id_role=tb_user.id_role');
		return $this->db->get();
	}

	public function kode_otomatis_pengguna(){
		  $this->db->select('RIGHT(tb_user.id_user,2) as kode', FALSE);
	      $this->db->order_by('id_user','DESC');    
	      $this->db->limit(1);    
	      $query = $this->db->get('tb_user');      //cek dulu apakah ada sudah ada kode di tabel.    
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
	      $kodejadi = "KDUSER-".$kodemax;    
	      return $kodejadi;  
	}

	public function get_pengguna_id($id_user){
		$this->db->select('tb_user.id_user,tb_role.id_role,tb_role.nm_role,tb_user.nama_user,tb_user.jenis_kelamin,tb_user.tgl_lahir,tb_user.alamat,tb_user.username,tb_user.pass');
		$this->db->from('tb_user');
		$this->db->join('tb_role','tb_role.id_role=tb_user.id_role');
		$this->db->where('id_user',$id_user);
		$hsl = $this->db->get();
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_user' => $data->id_user,
                    'nama_user' => $data->nama_user,
                    'id_role' => $data->id_role,
                    'tgl_lahir' => $data->tgl_lahir,
                    'jenis_kelamin' => $data->jenis_kelamin,
                    'alamat' => $data->alamat,
                    'username' => $data->username,
                    'pass' => $data->pass
                    );
            }
        }
        return $hasil;
	}

	public function update_pengguna_m($id_user,$data){
		$this->db->where('id_user',$id_user);
		$this->db->update('tb_user',$data);
	}

	public function hapus_pengguna_id($id_user){
		$this->db->where('id_user',$id_user);
		$this->db->delete('tb_user');
	}

}

/* End of file m_pengguna.php */
/* Location: ./application/models/backend/m_pengguna.php */