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
		$year = $this->input->post('year');

		return $this->db->query("call register_proc(".$this->db->escape($username).",
				".$this->db->escape($nickname).", ".$this->db->escape($password).",
				".$this->db->escape($conf_password).");");
	}

	function login($username, $password)
	{

	   $query = $this -> db -> query("call login_proc(".$this->db->escape($username).",
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