<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi extends CI_Controller {

	public function index()
	{
		$this->load->view('frontend/layouts/header');
		$this->load->view('frontend/layouts/menu');
		// $this->load->view('frontend/layouts/slider');
		// $data['image_all'] = $this->m_fasilitas->get_all_image($id_fasilitas)->result();
		// $data['fasilitas_all'] = $this->m_fasilitas->get_all_fasilitas($id_fasilitas)->row_array();
		$this->load->view('frontend/reservasi/index');		
		$this->load->view('frontend/layouts/footer');
	}

}

/* End of file Reservasi.php */
/* Location: ./application/controllers/Reservasi.php */