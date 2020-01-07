<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pengguna extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('backend/m_pengguna');
	}

	public function index()
	{
		$data['content'] = 'backend/admin/v_data_pengguna';
		$data['title'] = 'Data Pengguna';
		$data['kode_user'] = $this->m_pengguna->kode_otomatis_pengguna();
		$this->load->view('template/main', $data);
	}

	public function ambil_data_pengguna(){
		$data = $this->m_pengguna->get_pengguna()->result();
		echo json_encode($data);
	}

	public function proses_tambah_pengguna(){
		$data = array('success' => false, 'message' => array());

		$this->form_validation->set_rules('nama_user','Nama User','required|trim',[
			'required' => 'Nama Harus Di isi'
		]);
		$this->form_validation->set_rules('tgl_lahir','Tanggal Lahir','required|trim',[
			'required' => 'Tanggal lahir Harus Di isi'
		]);
		$this->form_validation->set_rules('nm_role','Level','required|trim',[
			'required' => 'Nama Level Harus Di isi'
		]);
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required|trim',[
			'required' => 'Jenis Kelamin Harus Di isi'
		]);
		$this->form_validation->set_rules('alamat','Alamat','required|trim',[
			'required' => 'Alamat Harus Di isi'
		]);
		$this->form_validation->set_rules('username','Username','required|trim|is_unique[tb_user.username]',[
				'is_unique' => 'Username Harus unik',
				'required' => 'Usrname Harus Di isi'
		]);
		$this->form_validation->set_rules('password','Password','required|trim|min_length[5]',[
				'min_length' => 'Password harus min 5 karaker',
				'required' => 'Password Harus Di isi'
		]);
		$this->form_validation->set_error_delimiters('<small class="text-danger">','</small>');

		if ($this->form_validation->run()) {

			$id_user = $this->input->post('id_user');
			$nama_user = $this->input->post('nama_user',true);
			$nm_role = $this->input->post('nm_role',true);
			$jenis_kelamin = $this->input->post('jenis_kelamin',true);
			$alamat = $this->input->post('alamat',true);
			$username = $this->input->post('username',true);
			$password = $this->input->post('password',true);

			$data = [
				'id_user' => $id_user,
				'nama_user' => $nama_user,
				'id_role' => $nm_role,
				'jenis_kelamin' => $jenis_kelamin,
				'alamat' => $alamat,
				'username' => $username,
				'password' => password_hash($password, PASSWORD_DEFAULT),
				'pass' => $password,
				'is_active' => '1'
			];
			$this->db->insert('tb_user',$data);
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
	} //End Function proses_tambah_pengguna()

	public function ambil_data_id(){
		$id_user = $this->input->get('id_user');
		$data = $this->m_pengguna->get_pengguna_id($id_user);
		echo json_encode($data);
	}

	public function update_pengguna(){
		$id_user = $this->input->post('id_user');
		$nama_user = $this->input->post('nama_user',true);
		$nm_role = $this->input->post('nm_role',true);
		$jenis_kelamin = $this->input->post('jenis_kelamin',true);
		$alamat = $this->input->post('alamat',true);
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);

		$data = [
				'id_user' => $id_user,
				'nama_user' => $nama_user,
				'id_role' => $nm_role,
				'jenis_kelamin' => $jenis_kelamin,
				'alamat' => $alamat,
				'username' => $username,
				'password' => password_hash($password, PASSWORD_DEFAULT),
				'pass' => $password,
				'is_active' => '1'
			];
			$data_pengguna = $this->m_pengguna->update_pengguna_m($id_user,$data);
			echo json_encode($data_pengguna);
	}

	public function hapus_pengguna(){
		$id_user = $this->input->post('id_user');
		$this->m_pengguna->hapus_pengguna_id($id_user);
	}

}

/* End of file Data_pengguna.php */
/* Location: ./application/controllers/admin/Data_pengguna.php */