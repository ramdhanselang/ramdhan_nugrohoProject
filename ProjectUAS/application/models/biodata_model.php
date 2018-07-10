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
		public function getDataMahasiswa()
		{
			$query = $this->db->query("select nimMhs, namaMahasiswa from mahasiswa");
			return $query->result_array();
		}

		public function insertDataMahasiswa()
		{
			$tglLahirRow = $this->input->post('tglLahir');
			$tglLahirExplode = explode("-", $tglLahirRow);
			$tglFix = $tglLahirExplode[2]."-".$tglLahirExplode[1]."-".$tglLahirExplode[0];

			$object = array(
				'nimMhs' => $this->input->post('nimMhs'), 
				'namaMhs' => $this->input->post('namaMhs'), 
				'tglLahirMhs' => $tglFix,
				'kotaLahirMhs' => $this->input->post('kotaLahirMhs'),
				'NIKMhs' => $this->input->post('nikMhs'),
				'agamaMhs' => $this->input->post('agamaMhs'),
				'jkMhs' => $this->input->post('jkMhs'),
				'nohpMhs' => $this->input->post('noHpMhs'),
				'emailMhs' => $this->input->post('emailMhs')
				);
			$this->db->insert('mahasiswa', $object);
		}

		public function getMahasiswa($nimMhs) {
			$this->db->where('nimMhs',$nimMhs);
			$query = $this->db->get('mahasiswa');
			return $query->result();
		}

		public function updateDataMahasiswa($nimMhs)
		{
			$tglLahirRow = $this->input->post('tglLahir');
			$tglLahirExplode = explode("-", $tglLahirRow);
			$tglFix = $tglLahirExplode[2]."-".$tglLahirExplode[1]."-".$tglLahirExplode[0];

			$object = array(
				'nimMhs' => $this->input->post('nimMhs'), 
				'namaMhs' => $this->input->post('namaMhs'), 
				'tglLahirMhs' => $tglFix,
				'kotaLahirMhs' => $this->input->post('kotaLahirMhs'),
				'NIKMhs' => $this->input->post('nikMhs'),
				'agamaMhs' => $this->input->post('agamaMhs'),
				'jkMhs' => $this->input->post('jkMhs'),
				'nohpMhs' => $this->input->post('nohpMhs'),
				'emailMhs' => $this->input->post('emailMhs')
				);
			$this->db->where('nimMhs',$nimMhs);
			$this->db->update('mahasiswa', $object);
		}

		public function deleteDataMahasiswa($nimMhs) 
		{ 
         	if ($this->db->delete("mahasiswa", "nimMhs = ".$nimMhs)) 
         	{ 
            return true; 
        	} 
      	} 

      	/*
		Data Keluarga
		*/
		public function getDataKeluarga()
		{
			$query = $this->db->get("keluarga");
			return $query->result_array();
		}

		public function insertDataKeluarga()
		{
			$object = array(
				'namaAyah' => $this->input->post('namaAyah'), 
				'nikAyah' => $this->input->post('nikAyah'),
				'namaIbu' => $this->input->post('namaIbu'),
				'nikIbu' => $this->input->post('nikIbu')
				);
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
		/*
		Data Sekolah
		*/
		public function getDataSekolah()
		{
			$query = $this->db->get("sekolah");
			return $query->result_array();
		}

		public function insertDataSekolah()
		{
			$object = array(
				'namaSkl' => $this->input->post('namaSkl'), 
				'jurusanSkl' => $this->input->post('jurusanSkl'),
				'nisnSkl' => $this->input->post('nisnSkl'),
				'nilaiUNSkl' => $this->input->post('nilaiUNSkl'),
				'jmlhMPSkl' => $this->input->post('jmlhMPSkl'),
				'rtUNSkl' => $this->input->post('rtUNSkl')
				);
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

		/*
		Data Domisili
		*/
		public function getDataDomisili()
		{
			$query = $this->db->get("domisili");
			return $query->result_array();
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
				);
			$this->db->insert('domisili', $object);
		}

		public function getDomisili($idDms) {
			$this->db->where('idDms',$idDms);
			$query = $this->db->get('domisili');
			return $query->result();
		}

		public function updateDataDomisili($idDms)
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
			$this->db->where('idDms', $idDms);
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
 ?>