<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Keluarga_model extends CI_Model {

		public function __construct()
		{
			# code...
			parent::__construct();
		}

		/*
		Data Keluarga
		*/
		public function getDataKeluarga()
		{
			$query = $this->db->get("keluarga");
			return $query->result_array();
		}

		public function insertDataKeluarga($idKlg)
		{
			$object = array(
				'namaAyah' => $this->input->post('namaAyah'), 
				'nikAyah' => $this->input->post('nikAyah'),
				'namaIbu' => $this->input->post('namaIbu'),
				'nikIbu' => $this->input->post('nikIbu')
				);
			$this->db->where('idKlg',$idKlg);
			$this->db->insert('keluarga', $object);
		}

		public function getKeluarga($idKlg) {
			$this->db->where('idKlg',$idKlg);
			$query = $this->db->get('keluarga');
			return $query->result();
		}

		public function updateDataKeluarga($idKlg)
		{
			$object = array(
				'namaAyah' => $this->input->post('namaAyah'), 
				'nikAyah' => $this->input->post('nikAyah'),
				'namaIbu' => $this->input->post('namaIbu'),
				'nikIbu' => $this->input->post('nikIbu')
				);
			$this->db->where('idKlg', $idKlg);
			$this->db->update('keluarga', $object);
		}

		public function deleteDataKeluarga($idKlg) 
		{ 
         	if ($this->db->delete("keluarga", "idKlg = ".$idKlg)) 
         	{ 
            return true; 
        	} 
      	} 

	}

/* End of file keluarga_model.php */
/* Location: ./application/models/keluarga_model.php */