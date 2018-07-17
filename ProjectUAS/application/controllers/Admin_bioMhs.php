<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_bioMhs extends CI_Controller {

	public function insertBio_MhsByNIM($nimMhs)
	{
		$data['nimMhs'] = $nimMhs;
		$this->load->model('mahasiswa_model');
		$data['mahasiswa'] = $this->mahasiswa_model->getMahasiswa($nimMhs);
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
		$this->form_validation->set_rules('namaSkl', 'namaSkl', 'trim|required');
		$this->form_validation->set_rules('jurusanSkl', 'jurusanSkl', 'trim|required');
		$this->form_validation->set_rules('nisnSkl', 'nisnSkl', 'trim|required');
		$this->form_validation->set_rules('nilaiUNSkl', 'nilaiUNSkl', 'trim|required');
		$this->form_validation->set_rules('jmlhMPSkl', 'jmlhMPSkl', 'trim|required');
		$this->form_validation->set_rules('rtUNSkl', 'rtUNSkl', 'trim|required');
		$this->load->model('sekolah_model');
		$data['nimMhs'] = $nimMhs;
		$this->form_validation->set_rules('namaAyah', 'namaAyah', 'trim|required');
		$this->form_validation->set_rules('nikAyah', 'nikAyah', 'trim|required');
		$this->form_validation->set_rules('namaIbu', 'nikIbu', 'trim|required');
		$this->form_validation->set_rules('nikIbu', 'nikIbu', 'trim|required');
		$this->load->model('keluarga_model');
		$data['nimMhs'] = $nimMhs;
		$this->form_validation->set_rules('alamatDms', 'alamatDms', 'trim|required');
		$this->form_validation->set_rules('rtDms', 'rtDms', 'trim|required');
		$this->form_validation->set_rules('rwDms', 'rwDms', 'trim|required');
		$this->form_validation->set_rules('kelDms', 'kelDms', 'trim|required');
		$this->form_validation->set_rules('kecDms', 'kecDms', 'trim|required');
		$this->form_validation->set_rules('kotaDms', 'kotaDms', 'trim|required');
		$this->form_validation->set_rules('provDms', 'provDms', 'trim|required');
		$this->form_validation->set_rules('kpDms', 'kpDms', 'trim|required');
		$this->load->model('domisili_model');
		if ($this->form_validation->run()==FALSE) {
			# code...
			$this->load->view('bioMhs_admin', $data);
		}else{
			$this->biodata_model->insertDataBiodata($nimMhs);
			$this->sekolah_model->insertDataSekolah($nimMhs);
			$this->keluarga_model->insertDataKeluarga($nimMhs);
			$this->domisili_model->insertDataDomisili($nimMhs);
			redirect('Admin_Mhs','refresh');
		}

	}

	public function update($nimMhs, $idBio, $idSkl, $idKlg, $idDms)
	{
		# code...
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
		$data['idBio'] = $idBio;
		$data['biodata'] = $this->biodata_model->getBiodata($idBio);

		$this->form_validation->set_rules('namaSkl', 'namaSkl', 'trim|required');
		$this->form_validation->set_rules('jurusanSkl', 'jurusanSkl', 'trim|required');
		$this->form_validation->set_rules('nisnSkl', 'nisnSkl', 'trim|required');
		$this->form_validation->set_rules('nilaiUNSkl', 'nilaiUNSkl', 'trim|required');
		$this->form_validation->set_rules('jmlhMPSkl', 'jmlhMPSkl', 'trim|required');
		$this->form_validation->set_rules('rtUNSkl', 'rtUNSkl', 'trim|required');
		$this->load->model('sekolah_model');
		$data['idSkl'] = $idSkl;
		$data['sekolah'] = $this->sekolah_model->getSekolah($idSkl);

		$this->form_validation->set_rules('namaAyah', 'namaAyah', 'trim|required');
		$this->form_validation->set_rules('nikAyah', 'nikAyah', 'trim|required');
		$this->form_validation->set_rules('namaIbu', 'nikIbu', 'trim|required');
		$this->form_validation->set_rules('nikIbu', 'nikIbu', 'trim|required');
		$this->load->model('keluarga_model');
		$data['idKlg'] = $idKlg;
		$data['keluarga'] = $this->keluarga_model->getKeluarga($idKlg);

		$this->form_validation->set_rules('alamatDms', 'alamatDms', 'trim|required');
		$this->form_validation->set_rules('rtDms', 'rtDms', 'trim|required');
		$this->form_validation->set_rules('rwDms', 'rwDms', 'trim|required');
		$this->form_validation->set_rules('kelDms', 'kelDms', 'trim|required');
		$this->form_validation->set_rules('kecDms', 'kecDms', 'trim|required');
		$this->form_validation->set_rules('kotaDms', 'kotaDms', 'trim|required');
		$this->form_validation->set_rules('provDms', 'provDms', 'trim|required');
		$this->form_validation->set_rules('kpDms', 'kpDms', 'trim|required');
		$this->load->model('domisili_model');
		$data['idDms'] = $idDms;
		$data['domisili'] = $this->domisili_model->getDomisili($idDms);
		if ($this->form_validation->run()==FALSE) {
			# code...
			$this->load->view('bioMhs_admin', $data);
		}else{
			$this->biodata_model->updateDataBiodata($idBio);
			$this->sekolah_model->updateDataSekolah($idSkl);
			$this->keluarga_model->updateDataKeluarga($idKlg);
			$this->domisili_model->updateDataDomisili($idDms);
			redirect('Admin_Mhs','refresh');
		};

	}

	public function read($nimMhs)
	{
		# code...
		$this->load->model('mahasiswa_model');
		$data['mahasiswa'] = $this->mahasiswa_model->getMahasiswa($nimMhs);
		$this->load->model('biodata_model');
		$data["biodata_list"] = $this->biodata_model->getBiodata($nimMhs);
		$this->load->model('sekolah_model');
		$data["sekolah_list"] = $this->sekolah_model->getSekolah($nimMhs);
		$this->load->model('keluarga_model');
		$data["keluarga_list"] = $this->keluarga_model->getKeluarga($nimMhs);
		$this->load->model('domisili_model');
		$data["domisili_list"] = $this->domisili_model->getDomisili($nimMhs);
		$this->load->view('detailmhs_admin',$data);
	}

	public function delete($nimMhs, $idBio, $idSkl, $idKlg, $idDms)
	{
		$this->load->helper('url');
		$this->load->model('mahasiswa_model');
		$this->mahasiswa_model->deleteMahasiswa($nimMhs);
		$this->load->model('biodata_model');
		$this->biodata_model->deleteDataBiodata($idBio);
		$this->load->model('sekolah_model');
		$this->sekolah_model->deleteDataSekolah($idSkl);
		$this->load->model('keluarga_model');
		$this->keluarga_model->deleteDataKeluarga($idKlg);
		$this->load->model('domisili_model');
		$this->domisili_model->deleteDataDomisili($idDms);
		redirect('Admin_Mhs','refresh');
	}
}

/* End of file Admin_bioMhs.php */
/* Location: ./application/controllers/Admin_bioMhs.php */