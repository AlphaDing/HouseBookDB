<?php
class user_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function add_user()
	{

		$email = $this->input->post('email');
		$password = $this->input->post('password');
	
		return $this->db->query("call add_user(".$this->db->escape($email).",
				 ".$this->db->escape($password).");");
	}

	function login($email, $password)
	{
	  
	   $query = $this -> db -> query("call login_proc(".$this->db->escape($email).",
	   												  ".$this->db->escape($password).");");

	   if($query -> num_rows() == 1)
	   {
	     return $query->result();
	   }
	   else
	   {
	   	return false;
	   }
	}
}