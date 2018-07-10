<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Mahasiswa extends CI_Controller {
	
		public function index()
		{
			$this->load->model('biodata_model');
			$data["biodata_list"] = $this->biodata_model->getDataMahasiswa();
			$this->load->view('mahasiswa',$data);
		}

		public function mahasiswaByNIM($nimMhs) 
		{
			$this->load->helper('url','form');
			$data['nimMhs'] = $nimMhs;
			$this->load->model('biodata_model');
			$data['biodata_list'] = $this->biodata_model->getMahasiswa($nimMhs);
			$this->load->view('home',$data);
		}
	
	}
	
	/* End of file Mahasiswa.php */
	/* Location: ./application/controllers/Mahasiswa.php */
 ?>