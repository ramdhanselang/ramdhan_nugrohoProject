<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Mahasiswa_model extends CI_Model {

	public function __construct()
	{
		# code...
		parent::__construct();
	}

	public function getDataMahasiswa()
	{
		$query = $this->db->query("select * from mahasiswa");
		return $query->result();
	}

	public function insertMahasiswa()
	{
		$object = array(
			'nimMhs' => $this->input->post('nimMhs'), 
			'namaMhs' => $this->input->post('namaMhs')
			);
		$this->db->insert('mahasiswa', $object);
	}

	public function getMahasiswa($nimMhs) 
	{
		$this->db->where('nimMhs',$nimMhs);
		$query = $this->db->get('mahasiswa');
		return $query->result();	
	}

	public function updateMahasiswaByNIM($nimMhs)
	{
		$object = array(
			'nimMhs' => $this->input->post('nimMhs'), 
			'namaMhs' => $this->input->post('namaMhs')
			);
		$this->db->where('nimMhs', $nimMhs);
		$this->db->update('mahasiswa', $object);
	}

	public function deleteMahasiswa($nimMhs) 
		{ 
         	if ($this->db->delete("mahasiswa", "nimMhs = ".$nimMhs)) 
         	{ 
            return true; 
        	} 
      	}
}

/* End of file mahasiswa_model.php */
/* Location: ./application/models/mahasiswa_model.php */