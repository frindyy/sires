<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function index()
	{
		$this->load->view('frontend/layouts/header');
		// $this->load->view('frontend/layouts/menu');
		// $this->load->view('frontend/layouts/slider');
		// $data['tampil_fakultas'] = $this->m_daftar->get_fakultas();
		$this->load->view('frontend/booking/index');		
		$this->load->view('frontend/layouts/footer');
	}

}

/* End of file Booking.php */
/* Location: ./application/controllers/Booking.php */