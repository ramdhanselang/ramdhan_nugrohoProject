<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Biodata_model extends CI_Model
	{
		
		public function __construct()
		{
			# code...
			parent::__construct();
		}

		/*
 		Data Mahasiswa
		*/
		public function getDataBiodata()
		{
			$query = $this->db->get("biodata");
			$query = $this->db->get("mahasiswa");
			return $query->result_array();
		}

		public function insertDataBiodata()
		{
			$tglLahirRow = $this->input->post('tglLahir');
			$tglLahirExplode = explode("-", $tglLahirRow);
			$tglFix = $tglLahirExplode[2]."-".$tglLahirExplode[1]."-".$tglLahirExplode[0];

			$object = array( 
				'tglLahirMhs' => $tglFix,
				'kotaLahirMhs' => $this->input->post('kotaLahirMhs'),
				'NIKMhs' => $this->input->post('nikMhs'),
				'agamaMhs' => $this->input->post('agamaMhs'),
				'jkMhs' => $this->input->post('jkMhs'),
				'nohpMhs' => $this->input->post('noHpMhs'),
				'emailMhs' => $this->input->post('emailMhs'),
				'fkNimMhs' => $this->input->post('fkNimMhs')
				);
			$this->db->insert('biodata', $object);
		}

		public function getBiodata($idBio) 
		{
			$this->db->where('idBio',$idBio);
			$query = $this->db->get('biodata');
			return $query->result_array();
		}

		public function updateDataBiodata($idBio)
		{
			$tglLahirRow = $this->input->post('tglLahir');
			$tglLahirExplode = explode("-", $tglLahirRow);
			$tglFix = $tglLahirExplode[2]."-".$tglLahirExplode[1]."-".$tglLahirExplode[0];

			$object = array(
				'tglLahirMhs' => $tglFix,
				'kotaLahirMhs' => $this->input->post('kotaLahirMhs'),
				'NIKMhs' => $this->input->post('nikMhs'),
				'agamaMhs' => $this->input->post('agamaMhs'),
				'jkMhs' => $this->input->post('jkMhs'),
				'nohpMhs' => $this->input->post('nohpMhs'),
				'emailMhs' => $this->input->post('emailMhs')
				);
			$this->db->where('idBio',$idBio);
			$this->db->update('idBio', $object);
		}

		public function deleteDataBiodata($idBio) 
		{ 
         	if ($this->db->delete("biodata", "idBio = ".$idBio)) 
         	{ 
            return true; 
        	} 
      	} 
	}
 ?>