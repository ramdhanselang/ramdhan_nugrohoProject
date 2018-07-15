<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_bioMhs extends CI_Controller {

	public function index()
	{
		$this->load->model('biodata_model');
		$data["biodata_list"] = $this->biodata_model->getDataBiodata();
		$this->load->view('mhs_admin',$data);
	}

	public function MhsByNIM($nimMhs)
	{
		$data['nimMhs'] = $nimMhs;
		$this->load->model('mahasiswa_model');
		$data['mahasiswa'] = $this->mahasiswa_model->getMahasiswa($nimMhs);
		$this->load->model('biodata_model');
		$data["biodata_list"] = $this->biodata_model->getBiodata($nimMhs);
		$this->load->view('bioMhs_admin',$data);
	}

	public function create($nimMhs)
	{
		$data['nimMhs'] = $nimMhs;
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('tglLahirMhs', 'tglLahirMhs', 'trim|required');
		$this->form_validation->set_rules('kotaLahirMhs', 'kotaLahirMhs', 'trim|required');
		$this->form_validation->set_rules('NIKMhs', 'NIKMhs', 'trim|required');
		$this->form_validation->set_rules('agamaMhs', 'agamaMhs', 'trim|required');
		$this->form_validation->set_rules('jkMhs', 'jkMhs', 'trim|required');
		$this->form_validation->set_rules('noHpMhs', 'noHpMhs', 'trim|required');
		$this->form_validation->set_rules('emailMhs', 'emailMhs', 'trim|required');
		$this->load->model('biodata_model');
		$this->biodata_model->insertDataBiodata($nimMhs);

		$this->form_validation->set_rules('namaSkl', 'namaSkl', 'trim|required');
		$this->form_validation->set_rules('jurusanSkl', 'jurusanSkl', 'trim|required');
		$this->form_validation->set_rules('nisnSkl', 'nisnSkl', 'trim|required');
		$this->form_validation->set_rules('nilaiUNSkl', 'nilaiUNSkl', 'trim|required');
		$this->form_validation->set_rules('jmlhMPSkl', 'jmlhMPSkl', 'trim|required');
		$this->form_validation->set_rules('rtUNSkl', 'rtUNSkl', 'trim|required');
		$this->load->model('sekolah_model');
		$this->sekolah_model->insertDataSekolah($nimMhs);

		$this->form_validation->set_rules('namaAyah', 'namaAyah', 'trim|required');
		$this->form_validation->set_rules('nikAyah', 'nikAyah', 'trim|required');
		$this->form_validation->set_rules('namaIbu', 'nikIbu', 'trim|required');
		$this->form_validation->set_rules('nikIbu', 'nikIbu', 'trim|required');
		$this->load->model('keluarga_model');
		$this->keluarga_model->insertDataKeluarga($nimMhs);

		$this->form_validation->set_rules('alamatDms', 'alamatDms', 'trim|required');
		$this->form_validation->set_rules('rtDms', 'rtDms', 'trim|required');
		$this->form_validation->set_rules('rwDms', 'rwDms', 'trim|required');
		$this->form_validation->set_rules('kelDms', 'kelDms', 'trim|required');
		$this->form_validation->set_rules('kecDms', 'kecDms', 'trim|required');
		$this->form_validation->set_rules('kotaDms', 'kotaDms', 'trim|required');
		$this->form_validation->set_rules('provDms', 'provDms', 'trim|required');
		$this->form_validation->set_rules('kpDms', 'kpDms', 'trim|required');
		$this->load->model('domisili_model');
		$this->domisili_model->insertDataDomisili($nimMhs);
		$this->load->view('mhs_admin',$data);

	}

	public function update($nimMhs, $idBio, $idSkl, $idKlg, $idDms)
	{
		# code...
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('tglLahirMhs', 'tglLahirMhs', 'trim|required');
		$this->form_validation->set_rules('kotaLahirMhs', 'kotaLahirMhs', 'trim|required');
		$this->form_validation->set_rules('NIKMhs', 'NIKMhs', 'trim|required');
		$this->form_validation->set_rules('agamaMhs', 'agamaMhs', 'trim|required');
		$this->form_validation->set_rules('jkMhs', 'jkMhs', 'trim|required');
		$this->form_validation->set_rules('noHpMhs', 'noHpMhs', 'trim|required');
		$this->form_validation->set_rules('emailMhs', 'emailMhs', 'trim|required');
		$this->load->model('biodata_model');
		$data['nimMhs'] = $nimMhs;
		$data['idBio'] = $idBio;
		$data['biodata'] = $this->biodata_model->getBiodata($idBio);
		$this->biodata_model->updateDataBiodata($idBio);

		$this->form_validation->set_rules('namaSkl', 'namaSkl', 'trim|required');
		$this->form_validation->set_rules('jurusanSkl', 'jurusanSkl', 'trim|required');
		$this->form_validation->set_rules('nisnSkl', 'nisnSkl', 'trim|required');
		$this->form_validation->set_rules('nilaiUNSkl', 'nilaiUNSkl', 'trim|required');
		$this->form_validation->set_rules('jmlhMPSkl', 'jmlhMPSkl', 'trim|required');
		$this->form_validation->set_rules('rtUNSkl', 'rtUNSkl', 'trim|required');
		$this->load->model('sekolah_model');
		$data['nimMhs'] = $nimMhs;
		$data['idSkl'] = $idSkl;
		$data['sekolah'] = $this->sekolah_model->getSekolah($idSkl);
		$this->sekolah_model->updateDataSekolah($idSkl);

		$this->form_validation->set_rules('namaAyah', 'namaAyah', 'trim|required');
		$this->form_validation->set_rules('nikAyah', 'nikAyah', 'trim|required');
		$this->form_validation->set_rules('namaIbu', 'nikIbu', 'trim|required');
		$this->form_validation->set_rules('nikIbu', 'nikIbu', 'trim|required');
		$this->load->model('keluarga_model');
		$data['nimMhs'] = $nimMhs;
		$data['idKlg'] = $idKlg;
		$data['keluarga'] = $this->keluarga_model->getKeluarga($idKlg);
		$this->keluarga_model->updateDataKeluarga($idKlg);

		$this->form_validation->set_rules('alamatDms', 'alamatDms', 'trim|required');
		$this->form_validation->set_rules('rtDms', 'rtDms', 'trim|required');
		$this->form_validation->set_rules('rwDms', 'rwDms', 'trim|required');
		$this->form_validation->set_rules('kelDms', 'kelDms', 'trim|required');
		$this->form_validation->set_rules('kecDms', 'kecDms', 'trim|required');
		$this->form_validation->set_rules('kotaDms', 'kotaDms', 'trim|required');
		$this->form_validation->set_rules('provDms', 'provDms', 'trim|required');
		$this->form_validation->set_rules('kpDms', 'kpDms', 'trim|required');
		$this->load->model('domisili_model');
		$data['nimMhs'] = $nimMhs;
		$data['idDms'] = $idDms;
		$data['domisili'] = $this->domisili_model->getDomisili($idDms);
		$this->domisili_model->updateDataDomisili($idDms);
		$this->load->view('mhs_admin',$data);

	}

	public function read()
	{
		# code...
		$this->load->model('mahasiswa_model');
		$data['mahasiswa'] = $this->mahasiswa_model->getMahasiswa($nimMhs);
		$this->load->model('biodata_model');
		$data["biodata_list"] = $this->biodata_model->getBiodata($nimMhs);
		$this->load->model('biodata_model');
		$data["sekolah_list"] = $this->sekolah_model->getSekolah($nimMhs);
		$this->load->model('biodata_model');
		$data["keluarga_list"] = $this->keluarga_model->getKeluarga($nimMhs);
		$this->load->model('biodata_model');
		$data["domisili_list"] = $this->domisili_model->getDomisili($nimMhs);
		$this->load->view('detailmhs_admin',$data);
	}
}

/* End of file Admin_bioMhs.php */
/* Location: ./application/controllers/Admin_bioMhs.php */