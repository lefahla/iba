<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    
  public function auth_user($username, $password)
	{ 
		$this->db->select('user_id,user_fullname,user_username,user_password');
		$this->db->from('user');
		$this->db->where('user_username',$username);
		$this->db->where('user_password',md5($password));
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
			return $query->result();
		else 
			return false;
	}
}
