<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function md_get_all_users()
		{ 
			$this->db->select('*');
			$this->db->from('all_clients');
			$this->db->order_by("id","DESC");
			$query = $this->db->get();

			return $query->result();
		}

	public function md_get_id()
	{
		return $this->db->count_all('all_clients');
	}

	public function	md_insert_client($data)
	{
		// Start generating clientID
		 $rowCount = $this->md_get_id();
		// Count the rows in the query excuted.

		$rowCount++;

		$countID = str_pad($rowCount,4,'0',STR_PAD_LEFT);

		$countID = strval($countID);

		$current_year = strval(Date('Y'));

		$IBA_id = "IBA" . $current_year .''.$countID;

		$registration_date = date("Y-m-d");//date('jS F Y');

		// Extrat information from variable $data and set it as according to the database structure
	 	$iData['clientID'] = $IBA_id;
		$iData['reg_date'] = $registration_date;
		$iData['firstname'] =  ucwords($data['firstname']);
		$iData['lastname'] = ucwords($data['lastname']);
		$iData['gender'] = $data['gender'];
		$iData['phonenumber'] = $data['phone_number'];
		$iData['otherphonenumber'] = $data['other_phone'];
		$iData['email'] = $data['email'];
		$iData['address'] = $data['physical_address'];
		$iData['city'] = $data['city'];

		return $this->db->insert('all_clients',$iData);
	}

	public function md_get_names(){ 

		$this->db->select('clientID');
		$this->db->select('firstname');
		$this->db->select('lastname');;
		$this->db->from('all_clients');
		$this->db->order_by("firstname","ASC");

		return $this->db->get()->result();
	}

     /**
	 * Result Int
	 *
	 * Returns the raw result data
	 * 
	 * @param	string	$results
	 * @return	int
	 */
	public function md_get_previous_loan($selectedName)
	{
		
		$name = explode(" ", $selectedName);
		
		$firstname = $name[0];

		$lastname = $name[1];

		$slag = 1; 

		/*$sql = $this->db->query("SELECT sum(previous_loan) AS md_previous_loan FROM monthlyloans WHERE firstname ='".$firstname."' AND lastname ='".$lastname."' AND slag = '".$slag."';" );
     */

		$sql = $this->db->query("SELECT balance AS md_previous_loan FROM monthlyloans WHERE firstname ='".$firstname."' AND lastname ='".$lastname."' AND slag = '".$slag."' ORDER BY id DESC LIMIT 1;" );

		// SELECT balance AS md_previous_loan FROM monthlyloans WHERE firstname ='Leo' AND lastname ='Mapalane' AND slag = '1' ORDER BY //regDate DESC LIMIT 1

		// SELECT * from monthlyloans where clientID='IBA20170011' ORDER BY regDate DESC LIMIT 1

		return $sql->result_array();
	}

	public function register_new_loan($data)
	{
		// Extrat information from variable $Data and set it as according to the database structure
		
		$name = explode(" ",$data['client_name']);
		$firstname = $name[0];
		$lastname = $name[1];	 	
	 	
		$sql = $this->db->query("SELECT clientID FROM all_clients WHERE firstname ='".$firstname."' AND lastname ='".$lastname."';" );

		$clientID = null;
		$result = $sql->result_array();//Get results in array format
		foreach ($result as $value) {
			$clientID = $value['clientID'];			
		} 

		$registration_date = date("d-m-Y"); //date('jS F Y');
		$iData['regDate'] = $registration_date;

		$iData['clientID'] = $clientID;
		$iData['firstname'] =  ucwords($firstname);
		$iData['lastname'] = ucwords($lastname);
		$iData['funds_invested'] = 50000;
		$iData['subscription'] = 4545;
		$iData['investment'] = 4145454;
		$iData['previous_loan'] = $data['previous_loan'];
		$iData['newLoan'] = $data['new_loan'];
		$iData['total_1'] = $data['total'];
		$iData['interest'] = $data['interest'];
		$iData['total_2'] = $data['new_total'];
		$iData['payment'] = $data['amount_paid'];
		$iData['Balance'] = $data['new_total'];
		$iData['slag'] = 1;

		return $this->db->insert('monthlyloans',$iData);
		
	}
}
