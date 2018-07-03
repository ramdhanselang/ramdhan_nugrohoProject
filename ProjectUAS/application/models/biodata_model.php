<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Biodata_model extends CI_Model
	{
		
		function __construct(argument)
		{
			# code...
			parent::__construct();
		}

		public function getDataMahasiswa
		{
			$query = $this->db->get("mahasiswa");
			return $query->result_array();
		}

		public function getDataKeluarga
		{
			$query = $this->db->get("keluarga");
			return $query->result_array();
		}

		public function getDataSekolah
		{
			$query = $this->db->get("sekolah");
			return $query->result_array();
		}

		public function getDataDomisili
		{
			$query = $this->db->get("domisili");
			return $query->result_array();
		}
	}
 ?>