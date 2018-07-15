<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_bioMhs extends CI_Controller {

	public function index()
	{
		$this->load->model('biodata_model');
		$data["biodata_list"] = $this->biodata_model->getDataBiodata();
		$this->load->view('mhs_admin',$data);
	}

	public function createBio_MhsByNIM($nimMhs)
	{
		$data['nimMhs'] = $nimMhs;
		$this->load->model('mahasiswa_model');
		$data['mahasiswa'] = $this->mahasiswa_model->getMahasiswa($nimMhs);
		$this->load->model('biodata_model');
		$data["biodata_list"] = $this->biodata_model->getBiodata($nimMhs);
		$this->load->view('detailmhs_admin',$data);
	}

}

/* End of file Admin_bioMhs.php */
/* Location: ./application/controllers/Admin_bioMhs.php */