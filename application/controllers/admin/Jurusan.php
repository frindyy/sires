<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('backend/m_jurusan');
	}

	public function index()
	{
		$data['content'] = 'backend/admin/v_data_jurusan';
		$data['title'] = 'Data Jurusan';
		$this->load->view('template/main', $data);
	}

	public function tampil_jurusan(){
		$data = $this->m_jurusan->get_jurusan()->result();
		echo json_encode($data);
	}

	public function tambah_proses(){
		$data = array('success' => false, 'message' => array());

		$this->form_validation->set_rules('nm_fakultas','Nama Fakultas','required|trim');
		$this->form_validation->set_rules('nm_jurusan','Nama Jurusan','required|trim');
		$this->form_validation->set_error_delimiters('<small class="text-danger">','</small>');
		
		if ($this->form_validation->run()) {
			$data = [
				'id_fakultas' => $this->input->post('nm_fakultas'),
				'nm_jurusan' => $this->input->post('nm_jurusan')
			];
			$this->db->insert('tb_jurusan',$data);
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
		$id_jurusan = $this->input->get('id_jurusan');
		$data = $this->m_jurusan->get_jurusan_id($id_jurusan);
		echo json_encode($data);
	}

	public function update_jurusan(){
		$id_jurusan = $this->input->post('id_jurusan');
		$nm_fakultas = $this->input->post('nm_fakultas');
		$nm_jurusan = $this->input->post('nm_jurusan');

		$data = [
			'id_fakultas' => $nm_fakultas,
			'nm_jurusan' => $nm_jurusan
		];
		$data_jurusan = $this->m_jurusan->update_jurusan_id($id_jurusan,$data);
		echo json_encode($data_jurusan);
	}

	public function hapus_jurusan(){
		$id_jurusan = $this->input->post('id_jurusan');
		$this->m_jurusan->hapus_jurusan_id($id_jurusan);
		$data['message'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
								  Data Berhasil Dihapus
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								  </button>
								</div>';
		echo json_encode($data);
	}

}

/* End of file Jurusan.php */
/* Location: ./application/controllers/admin/Jurusan.php */