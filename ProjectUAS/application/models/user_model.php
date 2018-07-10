<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class User_model extends CI_Model 
	{
		public function __construct()
		{
			# code...
			parent::__construct();
		}

		public function login($username,$password)
        {
            $this->db->select('idUser,usernameUser,passwordUser,levelUser');
            $this->db->from('user');
            $this->db->where('usernameUser',$username);
            $this->db->where('passwordUser', MD5($password));
            $query = $this->db->get();
            if($query->num_rows()==1){
                return $query->result();
            }else{
                return false;
            }
            
        }
     
        public function insert()
        {
            $data = array(
                'usernameUser' => $this->input->post('usernameUser'),
                'passwordUser' => md5($this->input->post('passwordUser')),
                'levelUser' => $this->input->post('levelUser')
            );
            $this->db->insert('user',$data);
        }
	}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */
 ?>