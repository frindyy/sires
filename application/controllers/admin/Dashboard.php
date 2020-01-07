<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['content'] = 'backend/admin/dashboard';
		$data['title'] = 'Dashboard';
		$this->load->view('template/main', $data);
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/admin/dashboard.php */