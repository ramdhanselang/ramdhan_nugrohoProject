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

		/*
		Data Mahasiswa
		*/
		public function getDataMahasiswa
		{
			$query = $this->db->get("mahasiswa");
			return $query->result_array();
		}

		public function insertDataMahasiswa
		{
			$tglLahirRow = $this->input->post('tglLahir');
			$tglLahirExplode = explode("-", $tglLahirRow);
			$tglFix = $tglLahirExplode[2]."-".$tglLahirExplode[1]."-".$tglLahirExplode[0];

			$object = array(
				'nimMhs' => $this->input->post('nim'), 
				'namaMhs' => $this->input->post('nama'), 
				'tglLahirMhs' => $tglFix,
				'kotaLahirMhs' => $this->input->post('kotaLahir'),
				'NIKMhs' => $this->input->post('nikMhs'),
				'agamaMhs' => $this->input->post('agama'),
				'jkMhs' => $this->input->post('jk'),
				'nohpMhs' => $this->input->post('noHp'),
				'emailMhs' => $this->input->post('email')
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
				'nimMhs' => $this->input->post('nim'), 
				'namaMhs' => $this->input->post('nama'), 
				'tglLahirMhs' => $tglFix,
				'kotaLahirMhs' => $this->input->post('kotaLahir'),
				'NIKMhs' => $this->input->post('nikMhs'),
				'agamaMhs' => $this->input->post('agama'),
				'jkMhs' => $this->input->post('jk'),
				'nohpMhs' => $this->input->post('noHp'),
				'emailMhs' => $this->input->post('email')
				);
			$this->db->where('nimMhs',$nimMhs);
			$this->db->update('mahasiswa', $data);
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
		public function getDataKeluarga
		{
			$query = $this->db->get("keluarga");
			return $query->result_array();
		}

		public function insertDataKeluarga
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

		public function insertDataKeluarga
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

		public function deleteDataSekolah($nimMhs) 
		{ 
         	if ($this->db->delete("keluarga", "idKlg = ".$idKlg)) 
         	{ 
            return true; 
        	} 
      	} 
		/*
		Data Sekolah
		*/
		public function getDataSekolah
		{
			$query = $this->db->get("sekolah");
			return $query->result_array();
		}

		public function insertDataSekolah
		{
			$object = array(
				'namaSkl' => $this->input->post('nama'), 
				'jurusanSkl' => $this->input->post('jurusan'),
				'nisnSkl' => $this->input->post('nisn'),
				'nilaiUNSkl' => $this->input->post('nilai'),
				'jmlhMPSkl' => $this->input->post('jumlahMP'),
				'rtUNSkl' => $this->input->post('rt')
				);
			$this->db->insert('sekolah', $object);
		}

		public function getSekolah($idSkl) {
			$this->db->where('idSkl',$idSkl);
			$query = $this->db->get('sekolah');
			return $query->result();
		}

		public function updateDataSekolah
		{
			$object = array(
				'namaSkl' => $this->input->post('nama'), 
				'jurusanSkl' => $this->input->post('jurusan'),
				'nisnSkl' => $this->input->post('nisn'),
				'nilaiUNSkl' => $this->input->post('nilai'),
				'jmlhMPSkl' => $this->input->post('jumlahMP'),
				'rtUNSkl' => $this->input->post('rt')
				);
			$this->db->where('idSkl',$idSkl);
			$this->db->update('sekolah', $object);
		}

		public function deleteDataSekolah($nimMhs) 
		{ 
         	if ($this->db->delete("sekolah", "idSkl = ".$idSkl)) 
         	{ 
            return true; 
        	} 
      	} 

		/*
		Data Domisili
		*/
		public function getDataDomisili
		{
			$query = $this->db->get("domisili");
			return $query->result_array();
		}

		public function insertDataDomisili
		{
			$object = array(
				'alamatDms' => $this->input->post('alamt'), 
				'rtDms' => $this->input->post('rt'),
				'rwDms' => $this->input->post('rw'),
				'kelDms' => $this->input->post('kel'),
				'kecDms' => $this->input->post('kec'),
				'kotaDms' => $this->input->post('kota'),
				'provDms' => $this->input->post('prov'),
				'kpDms' => $this->input->post('kodepos'),
				);
			$this->db->insert('domisili', $object);
		}

		public function getDomisili($idDms) {
			$this->db->where('idDms',$idDms);
			$query = $this->db->get('domisili');
			return $query->result();
		}

		public function insertDataDomisili
		{
			$object = array(
				'alamatDms' => $this->input->post('alamt'), 
				'rtDms' => $this->input->post('rt'),
				'rwDms' => $this->input->post('rw'),
				'kelDms' => $this->input->post('kel'),
				'kecDms' => $this->input->post('kec'),
				'kotaDms' => $this->input->post('kota'),
				'provDms' => $this->input->post('prov'),
				'kpDms' => $this->input->post('kodepos'),
				);
			$this->db->where('idDms', $idDms);
			$this->db->update('domisili', $object);
		}

		public function deleteDataSekolah($nimMhs) 
		{ 
         	if ($this->db->delete("domisili", "idDms = ".$idDms)) 
         	{ 
            return true; 
        	} 
      	} 
	}
 ?>