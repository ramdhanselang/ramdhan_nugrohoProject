<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Sekolah_model extends CI_Model {

		public function __construct()
		{
			# code...
			parent::__construct();
		}

		/*
		Data Sekolah
		*/
		public function getDataSekolah()
		{
			$query = $this->db->get("sekolah");
			return $query->result_array();
		}

		public function insertDataSekolah($idSkl)
		{
			$object = array(
				'namaSkl' => $this->input->post('namaSkl'), 
				'jurusanSkl' => $this->input->post('jurusanSkl'),
				'nisnSkl' => $this->input->post('nisnSkl'),
				'nilaiUNSkl' => $this->input->post('nilaiUNSkl'),
				'jmlhMPSkl' => $this->input->post('jmlhMPSkl'),
				'rtUNSkl' => $this->input->post('rtUNSkl')
				);
			$this->db->where('idSkl',$idSkl);
			$this->db->insert('sekolah', $object);
		}

		public function getSekolah($idSkl) {
			$this->db->where('idSkl',$idSkl);
			$query = $this->db->get('sekolah');
			return $query->result();
		}

		public function updateDataSekolah($idSkl)
		{
			$object = array(
				'namaSkl' => $this->input->post('namaSkl'), 
				'jurusanSkl' => $this->input->post('jurusanSkl'),
				'nisnSkl' => $this->input->post('nisnSkl'),
				'nilaiUNSkl' => $this->input->post('nilaiUNSkl'),
				'jmlhMPSkl' => $this->input->post('jmlhMPSkl'),
				'rtUNSkl' => $this->input->post('rtUNSkl')
				);
			$this->db->where('idSkl',$idSkl);
			$this->db->update('sekolah', $object);
		}

		public function deleteDataSekolah($idSkl) 
		{ 
         	if ($this->db->delete("sekolah", "idSkl = ".$idSkl)) 
         	{ 
            return true; 
        	} 
      	} 


	}

/* End of file sekolah_model.php */
/* Location: ./application/models/sekolah_model.php */