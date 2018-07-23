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
			return $query->result();
		}

				public function getkeluargaByIdMhs($id)
		{
			$query = $this->db->query("select * from keluarga where fkNimMhs='$id'");
			return $query->result();
		}

		public function insertDataKeluarga()
		{
			$object = array(
				'namaAyah' => $this->input->post('namaAyah'), 
				'nikAyah' => $this->input->post('nikAyah'),
				'namaIbu' => $this->input->post('namaIbu'),
				'nikIbu' => $this->input->post('nikIbu'),
				'fkNimMhs' => $this->input->post('fk_nimMhs')
				);
			$this->db->insert('keluarga', $object);
		}

		public function getKeluarga($nimMhs) {
			$this->db->where('fkNimMhs',$nimMhs);
			$query = $this->db->get('keluarga');
			return $query->result();
		}

		public function updateDataKeluarga($nimMhs)
		{
			$object = array(
				'namaAyah' => $this->input->post('namaAyah'), 
				'nikAyah' => $this->input->post('nikAyah'),
				'namaIbu' => $this->input->post('namaIbu'),
				'nikIbu' => $this->input->post('nikIbu')
				);
			$this->db->where('fkNimMhs', $nimMhs);
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