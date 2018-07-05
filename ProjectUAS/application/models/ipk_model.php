<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Ipk_model extends CI_Model 
	{
		public function __construct()
		{
			# code...
			parent::__construct();
		}

		public function getDataIpk
		{
			$query = $this->db->get("ipk");
			return $query->result_array();
		}
	}

/* End of file ipk_model.php */
/* Location: ./application/models/ipk_model.php */
?>