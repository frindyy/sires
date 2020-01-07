<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('frontend/m_daftar');
		$this->load->model('frontend/m_fasilitas');
	}

	public function index()
	{
		$this->load->view('frontend/layouts/header');
		$this->load->view('frontend/layouts/menu');
		$this->load->view('frontend/layouts/slider');
		$data['tampil_fakultas'] = $this->m_daftar->get_fakultas();
		$data['tampil_image'] = $this->m_fasilitas->get_image_fasilitas()->result();
		$this->load->view('frontend/home/index',$data);		
		$this->load->view('frontend/layouts/footer');
	}

	public function get_jurusan(){
		$id_fakultas = $this->input->post('id');
		$data = $this->m_daftar->get_jurusan($id_fakultas)->result();
		echo json_encode($data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */