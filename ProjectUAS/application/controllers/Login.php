<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('UsernameUser', 'Username');
		$this->form_validation->set_rules('PasswordUser', 'Password');
		if($this->form_validation->run() == FALSE){
			$this->load->view('login');
		}else{
			if($this->$this->session->userdata('logged_in')['levelUser'] ==  'admin'){
				redirect('Home/Admin','refresh');
			}else{
				redirect('Home','refresh');
			}
		}
	
	}

	public function logout()
        {
            # code...
            $this->session->unset_userdata('logged_in');
            $this->session->sess_destroy();
            redirect('login','refresh');
        }

	public function cekDb($password)
        {
            # code...
            $this->load->model('user_model');
            $username = $this->input->post('usernameUser'); 
            $result = $this->user->login($username,$password);
            if($result){
                $session_array = array();
                foreach ($result as $key) {
                    $session_array = array(
                        'idUser'=>$key->idUser,
                        'usernameUser'=>$key->usernameUser,
                        'levelUser' => $row->levelUser
                    );
                    $this->session->set_userdata('logged_in',$session_array);
                }
                return true;
            }else{
                $this->form_validation->set_message('cekDb',"login gagal");
                return false;
            }
        }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */