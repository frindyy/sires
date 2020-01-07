<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_fasilitas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('frontend/m_fasilitas');
	}


	public function preview($id_fasilitas)
	{
		
		$this->load->view('frontend/layouts/header');
		$this->load->view('frontend/layouts/menu');
		// $this->load->view('frontend/layouts/slider');
		$data['image_all'] = $this->m_fasilitas->get_all_image($id_fasilitas)->result();
		$data['fasilitas_all'] = $this->m_fasilitas->get_all_fasilitas($id_fasilitas)->row_array();
		$this->load->view('frontend/detail-fasilitas/index',$data);		
		$this->load->view('frontend/layouts/footer');
		
		
	}

}

/* End of file Detail_fasilitas.php */
/* Location: ./application/controllers/Detail_fasilitas.php */