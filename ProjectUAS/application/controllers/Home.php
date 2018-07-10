<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('biodata_model');
		$data["biodata_list"] = $this->biodata_model->getDataMahasiswa();
		$this->load->view('home',$data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */