<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home_admin');
	}

}

/* End of file Admin_Home.php */
/* Location: ./application/controllers/Admin_Home.php */