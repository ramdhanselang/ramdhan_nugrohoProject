<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Matakuliah_model extends CI_Model
	{
		
		public function __construct()
		{
			# code...
			parent::__construct();
		}

		public function getDataMatakuliah
		{
			$query = $this->db->get("matakuliah");
			return $query->result_array();
		}

		public function insertDataMatakuliah
		{
			$object = array(
				'namaMK' => $this->input->post('namaMK'), 
				'sksMK' => $this->input->post('sksMK'),
				'jamMK' => $this->input->post('jamMK'),
				'nilaiMK' => $this->input->post('nilaiMK')
				);
			$this->db->insert('matakuliah', $object);
		}

		public function getMatakuliah($idMK) {
			$this->db->where('idMK',$idMK);
			$query = $this->db->get('matakuliah');
			return $query->result();
		}

		public function updateDataMatakuliah($idMK)
		{
			$object = array(
				'namaMK' => $this->input->post('namaMK'), 
				'sksMK' => $this->input->post('sksMK'),
				'jamMK' => $this->input->post('jamMK'),
				'nilaiMK' => $this->input->post('nilaiMK')
				);
			$this->db->where('idMK', $idMK);
			$this->db->update('matakuliah', $object);
		}

		public function deleteDataMatakuliah($idMK) 
		{ 
         	if ($this->db->delete("matakuliah", "idMK = ".$idMK)) 
         	{ 
            return true; 
        	} 
      	} 
	}
 ?>