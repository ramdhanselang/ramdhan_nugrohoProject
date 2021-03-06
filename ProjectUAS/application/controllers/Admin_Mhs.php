<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Mhs extends CI_Controller {

	public function index()
	{
		$this->load->model('mahasiswa_model');
		$data["mahasiswa_list"] = $this->mahasiswa_model->getDataMahasiswa();
		$this->load->view('mhs_admin',$data);
	}

	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('mahasiswa_model');
		$this->form_validation->set_rules('nimMhs', 'NIM', 'trim|required');
		$this->form_validation->set_rules('namaMhs', 'Nama', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			# code...
			$this->load->view('insertMhs_admin');
		}else{
			$this->mahasiswa_model->insertMahasiswa();
			redirect('Admin_Mhs','refresh');
		}
	}
}

/* End of file Admin_Mhs.php */
/* Location: ./application/controllers/Admin_Mhs.php */