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

		public function getsekolahByIdMhs($id)
		{
			$query = $this->db->query("select * from sekolah where fkNimMhs='$id'");
			return $query->result();
		}

		public function insertDataSekolah()
		{
			$object = array(
				'namaSkl' => $this->input->post('namaSkl'), 
				'jurusanSkl' => $this->input->post('jurusanSkl'),
				'nisnSkl' => $this->input->post('nisnSkl'),
				'nilaiUNSkl' => $this->input->post('nilaiUNSkl'),
				'jmlhMPSkl' => $this->input->post('jmlhMPSkl'),
				'rtUNSkl' => $this->input->post('rtUNSkl'),
				'fkNimMhs' => $this->input->post('fk_nimMhs')
				);
			$this->db->insert('sekolah', $object);
		}

		public function getSekolah($nimMhs) {
			$this->db->where('fkNimMhs',$nimMhs);
			$query = $this->db->get('sekolah');
			return $query->result();
		}

		public function updateDataSekolah($nimMhs)
		{
			$object = array(
				'namaSkl' => $this->input->post('namaSkl'), 
				'jurusanSkl' => $this->input->post('jurusanSkl'),
				'nisnSkl' => $this->input->post('nisnSkl'),
				'nilaiUNSkl' => $this->input->post('nilaiUNSkl'),
				'jmlhMPSkl' => $this->input->post('jmlhMPSkl'),
				'rtUNSkl' => $this->input->post('rtUNSkl')
				);
			$this->db->where('fkNimMhs',$nimMhs);
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