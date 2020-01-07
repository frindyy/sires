<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('backend/login_user/auth');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/login-user/Auth.php */