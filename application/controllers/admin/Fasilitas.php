<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('backend/m_fasilitas');
	}

	public function index()
	{
		$data['content'] = 'backend/admin/fasilitas/v_data_fasilitas';
		$data['title'] = 'Data Fasilitas';
		$this->load->view('template/main', $data);
	}

	public function tambah_fasilitas(){

		$this->form_validation->set_rules('nm_fasilitas', 'Nama Fasilitas', 'trim|required');
		$this->form_validation->set_rules('kap_ruangan', 'Kapasitas', 'trim|required');
		$this->form_validation->set_rules('harga_fasilitas', 'Harga Fasilitas', 'trim|required');
		$this->form_validation->set_rules('deskripsi_fasilitas', 'Deskripsi Fasilitas', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['content'] = 'backend/admin/fasilitas/tambah_fasilitas';
			$data['title'] = 'Tambah Fasilitas';
			$data['kode_fasilitas'] = $this->m_fasilitas->kode_fasilitas();
			$this->load->view('template/main', $data);
		} else {

			$id_fasilitas = htmlspecialchars($this->input->post('id_fasilitas',true));
			$nm_fasilitas = htmlspecialchars($this->input->post('nm_fasilitas',true));
			$kap_ruangan = htmlspecialchars($this->input->post('kap_ruangan',true));
			$harga_fasilitas = htmlspecialchars($this->input->post('harga_fasilitas',true));
			$deskripsi_fasilitas = htmlspecialchars($this->input->post('deskripsi_fasilitas',true));

			$data = [
				'id_fasilitas' => $id_fasilitas,
				'nm_fasilitas' => $nm_fasilitas,
				'kap_ruangan' => $kap_ruangan,
				'harga' => $harga_fasilitas,
				'deskripsi' => $deskripsi_fasilitas
			];

			$this->m_fasilitas->insert_fasilitas($data);
			//---------------------------UPLOAD IMAGE-----------------------------------

			$config['upload_path'] = './assets/upload_image/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size']	= '2048';
			// $config['file_name']  = 'userfile-'.trim(str_replace(" ","",date('dmYHis')));

			$this->load->library('upload', $config);

			for ($i=1; $i <=5 ; $i++) { 
            if(!empty($_FILES['filefoto'.$i]['name'])){
                if(!$this->upload->do_upload('filefoto'.$i)){
                	//Gagal Upload (PROBLEM)----------------
                		$this->upload->display_errors(); 
               	 	}
                else{
                	//Sukses Upload
     //            	$config['image_library']='gd2';
		   //          $config['source_image']='./assets/upload_image/'.$_FILES["filefoto".$i]['name'];
		   //          $config['create_thumb']= FALSE;
		   //          $config['maintain_ratio']= FALSE;
	    //             $config['quality']= '50%';
					// $config['width']= 380;
					// $config['height']= 320;
					// $this->load->library('image_lib', $config);
		   //          $this->image_lib->resize();
		            
                		$last_id_fasilitas = $this->db->query('select id_fasilitas from tb_fasilitas order by id_fasilitas desc')->row_array();
                   		$dt_upload = array('foto_fasilitas' => $_FILES["filefoto".$i]['name'], 'id_fasilitas' =>  $last_id_fasilitas['id_fasilitas']);
                   		$this->m_fasilitas->foto_fasilitas($dt_upload);
                	}
            	}
        	}

			
			redirect('admin/fasilitas');




		}
	}

}

/* End of file Fasilitas.php */
/* Location: ./application/controllers/Fasilitas.php */