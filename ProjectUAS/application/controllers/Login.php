<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('usernameUser', 'usernameUser','trim|required|callback_cekDb');
		$this->form_validation->set_rules('passwordUser', 'passwordUser','trim|required');
		if($this->form_validation->run() == FALSE){
			$this->load->view('login');
		}else{
			if($this->session->userdata('logged_in')['levelUser'] ==  'admin'){
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
            $result = $this->user_model->login($username,$password);
            if($result){
                $session_array = array();
                foreach ($result as $row) {
                    $session_array = array(
                        'idUser'=>$row->idUser,
                        'usernameUser'=>$row->usernameUser,
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