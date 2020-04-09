<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

 
	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			redirect(base_url('index.php/dashboard'),'refresh');
		}

		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required|callback_user_login');
		if($this->form_validation->run() == false) 
		{
			$this->load->view('login_view');
		}else
		{
			redirect(base_url('index.php/dashboard'),'refresh');
		}		
	}

	private function set_session($session_value)
	{
		return $this->session->set_userdata('logged_in',$session_value);
	}

	public function user_login()
	{
		$this->load->model('login_model');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$result = $this->login_model->auth_user($username, $password);

		/*$clients_id = $this->login_model->getAll_ids();*/
		 
		if($result)
		{
			$session_array = array();

			foreach ($result as $row)
			{
				$session_array = array(
										//'clients_id' =>  $clients_id,
										'fullname'   =>  $row->user_fullname
										
									);
				$this->set_session($session_array);
			} 

			return true;
		}else
		{
			$this->form_validation->set_message('error_msg','Invalid username or password'); 
			return false;
		}

	}
}
