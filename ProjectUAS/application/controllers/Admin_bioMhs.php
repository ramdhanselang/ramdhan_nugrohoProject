<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_bioMhs extends CI_Controller {

	public function index()
	{
		$this->load->model('biodata_model');
		$data["biodata_list"] = $this->biodata_model->getDataBiodata();
		$this->load->view('mhs_admin',$data);
	}

}

/* End of file Admin_bioMhs.php */
/* Location: ./application/controllers/Admin_bioMhs.php */