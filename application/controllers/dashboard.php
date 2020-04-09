<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard extends CI_Controller {
	
	public function index()
	{		 

		if($this->session->userdata('logged_in'))
		{
			// Get the function that initiates the model
			$this->get_model();

			// Set the session to get the total number of clients registered
			$this->session->set_userdata('clients_id',$this->dashboard_model->md_get_id());
 
			$records = $this->dashboard_model->md_get_all_users();
			
			$session_data = $this->session->userdata('logged_in');

			// Get all clients in the database to view them in the dashboard
			$data['records'] = $records;

			// Get session data
			//$data['clients_id'] = $session_data['clients_id'];
			$data['fullname'] = $session_data['fullname'];

			$this->load->view('dashboard_view',$data);

		}else 
		{
			redirect('login','refresh');
		}
	}
	
	private function get_session(){
		$session_data = $this->session->userdata('logged_in');
		return 	$session_data;
	}

	private function get_session_data()
	{

		$session_data = $this->get_session();

		if(!$session_data)
			redirect('login','refresh');
		else
			return $session_data;
	}

	private function get_model()
	{
		return $this->load->model('dashboard_model');
	}

	public function add_user()
	{
		$this->get_model();
		// Set the session to get the total number of clients registered
		$this->session->set_userdata('clients_id',$this->dashboard_model->md_get_id());
 		
		$session_data = $this->get_session();
		if(!$session_data)
		{
			redirect('login','refresh');
		}
		else
		{	 
				$this->get_model();

				$data = $this->input->post();	 
				// set the post items  in the view in CI format using the one i used beofre changing the        
				
	 			if($this->dashboard_model->md_insert_client($data))
				{
					$this->session->set_flashdata('response','<div id="response" class="col-md-10 alert alert-info">Client <strong>'.$data['firstname'] .'</strong> registration successful</div>');
				}else
				{
					$this->session->set_flashdata('response','<div id="response" class="col-md-10 alert alert-danger">Client not successfully registered</div>');
				}
				unset($data);
				redirect('dashboard/user_profile'); 
		   
	    }
	 }

	public function logout()
	{
		//$this->session->unset_userdata('logged_in','clients_id');
		$this->session->sess_destroy();

		redirect(site_url('login'),'refresh');
	}

	public function user_profile()
	{
		$this->get_model();
		// Set the session to get the total number of clients registered
		$this->session->set_userdata('clients_id',$this->dashboard_model->md_get_id());
 
		$session_data = $this->get_session_data();

		$this->load->view('add_client_view',$session_data);
	}


	public function client_names()
	{ 

		$session_data = $this->get_session_data();

		$this->get_model();

		$results = $this->dashboard_model->md_get_names();
		 echo  "<option id='void' name='void' value='void'>---- Select the name ----</option>";
		foreach ($results as $key) { 
			echo "<option id='client_name' value='".ucwords($key->firstname)." ".ucwords($key->lastname)."'>";
			echo ucwords($key->firstname)." ".ucwords($key->lastname)." <i>:</i> ".$key->clientID;
			echo "</option>";
		}
    }	 

	public function register_loan()
	{
		$this->get_model();
		
		// Set the session to get the total number of clients registered
		$this->session->set_userdata('clients_id',$this->dashboard_model->md_get_id());
 
		$session_data = $this->get_session_data();
		 
		$this->load->view('register_loan_view',$session_data);
	}

    public function get_previous_loan()
	{
			$session_data = $this->get_session_data();
			$this->get_model();

			$sendData = $this->input->post('client_name');

			$results = $this->dashboard_model->md_get_previous_loan($sendData); 

		if($results)
		{
			foreach ($results as $key) 
			{
				$null = 0;
				if($key['md_previous_loan'] == '' || $key['md_previous_loan'] == NULL )
				{
					echo $null;
				}else
				{
					echo $key['md_previous_loan'];
				}
			}
		}else
		{
			$zero = 0;
			echo $zero;
		}			
	}	 

	public function client_get_new_loan()
	{
		$this->get_model();
		// Set the session to get the total number of clients registered
		$this->session->set_userdata('clients_id',$this->dashboard_model->md_get_id());
 		
		$session_data = $this->get_session();
		if(!$session_data)
		{
			redirect('login','refresh');
		}
		else
		{	 // Proceed to registering a new client in the system.
				$this->get_model();

				$data = $this->input->post();	
				 // set the post items  in the view in CI format using the one i used beofre changing the        
				
	 			if($this->dashboard_model->register_new_loan($data))
				{
					$this->session->set_flashdata('newLoan_response','<div id="response" class="col-md-10 alert alert-info">New loan for <strong>'.$data['firstname'] .'</strong> successful</div>

						<script language="JavaScript">
						 alert("Registration a success");

						</script>');
				}else
				{
					$this->session->set_flashdata('newLoan_response','<div id="response" class="col-md-10 alert alert-danger">Loan not successfully registered</div>');
				}
				unset($data);
				redirect('dashboard/register_loan'); 
		   
	    }
	 } 
}
