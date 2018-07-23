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

		public function getbiodataByIdMhs($id)
		{
			$query = $this->db->query("select * from biodata where fkNimMhs='$id'");
			return $query->result();
		}

		public function insertDataBiodata()
		{
			$tgl=$this->input->post('tglLahirMhs');
			$tglFix=date_format(new DateTime($tgl),"Y-m-d");

			$object = array( 
				'tglLahirMhs' => $tglFix,
				'kotaLahirMhs' => $this->input->post('kotaLahirMhs'),
				'NIKMhs' => $this->input->post('NIKMhs'),
				'agamaMhs' => $this->input->post('agamaMhs'),
				'jkMhs' => $this->input->post('jkMhs'),
				'nohpMhs' => $this->input->post('noHpMhs'),
				'emailMhs' => $this->input->post('emailMhs'),
				'fkNimMhs' => $this->input->post('fk_nimMhs')
				);
			$this->db->insert('biodata', $object);
		}

		public function getBiodata($nimMhs) 
		{
			$this->db->where('fkNimMhs',$nimMhs);
			$query = $this->db->get('biodata');
			return $query->result_array();
		}

		public function updateDataBiodata($nimMhs)
		{
			$tgl=$this->input->post('tglLahirMhs');
			$tglFix=date_format(new DateTime($tgl),"Y-m-d");

			$object = array(
				'tglLahirMhs' => $tglFix,
				'kotaLahirMhs' => $this->input->post('kotaLahirMhs'),
				'NIKMhs' => $this->input->post('NIKMhs'),
				'agamaMhs' => $this->input->post('agamaMhs'),
				'jkMhs' => $this->input->post('jkMhs'),
				'nohpMhs' => $this->input->post('nohpMhs'),
				'emailMhs' => $this->input->post('emailMhs')
				);
			$this->db->where('fkNimMhs',$nimMhs);
			$this->db->update('biodata', $object);
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