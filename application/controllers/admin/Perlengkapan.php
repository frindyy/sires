<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perlengkapan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('backend/m_perlengkapan');
	}

	public function index()
	{
		$data['content'] = 'backend/admin/v_data_perlengkapan';
		$data['title'] = 'Data Perlengkapan';
		$this->load->view('template/main', $data);
	}

	public function tampil_perlengkapan(){
		$data = $this->m_perlengkapan->get_perlengkapan()->result();
		echo json_encode($data);
	}

	public function tambah_proses(){
		$data = array('success' => false, 'message' => array());

		$this->form_validation->set_rules('nm_perlengkapan','Nama Perlengkapan','required|trim');
		$this->form_validation->set_rules('satuan','Satuan','required|trim');
		$this->form_validation->set_rules('harga','Harga','required|trim');
		$this->form_validation->set_error_delimiters('<small class="text-danger">','</small>');
		
		if ($this->form_validation->run()) {
			$data = [
				'nm_perlengkapan' => $this->input->post('nm_perlengkapan'),
				'satuan' => $this->input->post('satuan'),
				'harga' => $this->input->post('harga')
			];
			$this->db->insert('tb_perlengkapan',$data);
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
		$id_perlengkapan = $this->input->get('id_perlengkapan');
		$data = $this->m_perlengkapan->get_perlengkapan_id($id_perlengkapan);
		echo json_encode($data);
	}

	public function update_perlengkapan(){
		$id_perlengkapan = $this->input->post('id_perlengkapan');
		$nm_perlengkapan = $this->input->post('nm_perlengkapan');
		$satuan = $this->input->post('satuan');
		$harga = $this->input->post('harga');

		$data = [
			'nm_perlengkapan' => $nm_perlengkapan,
			'satuan' => $satuan,
			'harga' => $harga
		];
		// $data_perlengkapan['message'] =  '<div class="alert alert-success alert-dismissible fade show" role="alert">
		// 							  Data Berhasil Diupdate
		// 							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		// 							    <span aria-hidden="true">&times;</span>
		// 							  </button>
		// 							</div>';
		$data = $this->m_perlengkapan->update_perlengkapan_id($id_perlengkapan,$data);
		echo json_encode($data);
	}

}

/* End of file Perlengkapan.php */
/* Location: ./application/controllers/admin/Perlengkapan.php */