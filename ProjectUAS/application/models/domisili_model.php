<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Domisili_model extends CI_Model {

		public function __construct()
		{
			# code...
			parent::__construct();
		}

		/*
		Data Domisili
		*/
		public function getDataDomisili()
		{
			$query = $this->db->get("domisili");
			return $query->result_array();
		}

				public function getdomisiliByIdMhs($id)
		{
			$query = $this->db->query("select * from domisili where fkNimMhs='$id'");
			return $query->result();
		}

		public function insertDataDomisili()
		{
			$object = array(
				'alamatDms' => $this->input->post('alamatDms'), 
				'rtDms' => $this->input->post('rtDms'),
				'rwDms' => $this->input->post('rwDms'),
				'kelDms' => $this->input->post('kelDms'),
				'kecDms' => $this->input->post('kecDms'),
				'kotaDms' => $this->input->post('kotaDms'),
				'provDms' => $this->input->post('provDms'),
				'kpDms' => $this->input->post('kpDms'),
				'fkNimMhs' => $this->input->post('fk_nimMhs')
				);
			$this->db->insert('domisili', $object);
		}

		public function getDomisili($nimMhs) {
			$this->db->where('fkNimMhs',$nimMhs);
			$query = $this->db->get('domisili');
			return $query->result();
		}

		public function updateDataDomisili($nimMhs)
		{
			$object = array(
				'alamatDms' => $this->input->post('alamatDms'), 
				'rtDms' => $this->input->post('rtDms'),
				'rwDms' => $this->input->post('rwDms'),
				'kelDms' => $this->input->post('kelDms'),
				'kecDms' => $this->input->post('kecDms'),
				'kotaDms' => $this->input->post('kotaDms'),
				'provDms' => $this->input->post('provDms'),
				'kpDms' => $this->input->post('kpDms'),
				);
			$this->db->where('fkNimMhs', $nimMhs);
			$this->db->update('domisili', $object);
		}

		public function deleteDataDomisili($idDms) 
		{ 
         	if ($this->db->delete("domisili", "idDms = ".$idDms)) 
         	{ 
            return true; 
        	} 
      	}

	}

/* End of file domisili_model.php */
/* Location: ./application/models/domisili_model.php */