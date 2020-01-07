<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fakultas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('backend/m_fakultas');
	}

	public function index()
	{
		$data['content'] = 'backend/admin/v_data_fakultas';
		$data['title'] = 'Data Fakultas';
		// $data['tampil_fakultas'] = $this->m_fakultas->get_fakultas()->result_array();
		$this->load->view('template/main', $data);
	}

	public function tampil_fakultas(){
		$data = $this->m_fakultas->get_fakultas()->result();
		echo json_encode($data);
	}

	public function tambah_proses(){
		$data = array('success' => false, 'message' => array());

		$this->form_validation->set_rules('nm_fakultas','Nama Fakultas','required|trim');
		$this->form_validation->set_error_delimiters('<small class="text-danger">','</small>');
		
		if ($this->form_validation->run()) {
			$data = [
				'nm_fakultas' => $this->input->post('nm_fakultas')
			];
			$this->db->insert('tb_fakultas',$data);
			$data['success'] = true;
			$data['message'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
								  Data Berhasil Ditambahkan
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								  </button>
								</div>';
		} else {
			foreach ($_POST as $key => $value) {
				$data['message'][$key] = form_error($key);
			}
		}
		echo json_encode($data);
	}

	public function ambil_data_id(){
		$id_fakultas = $this->input->get('id_fakultas');
		$data = $this->m_fakultas->get_fakultas_id($id_fakultas);
		echo json_encode($data);
	}

	public function update_fakultas(){
		$id_fakultas = $this->input->post('id_fakultas');
		$nm_fakultas = $this->input->post('nm_fakultas');
		$data = [
			'nm_fakultas' => $nm_fakultas
		];
		$data_fakultas = $this->m_fakultas->update_fakultas_id($id_fakultas,$data);
		echo json_encode($data_fakultas);
	}

}

/* End of file Fakultas.php */
/* Location: ./application/controllers/admin/Fakultas.php */