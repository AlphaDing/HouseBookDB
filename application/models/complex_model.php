<?php
class Complex_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function addComplex()
	{

		$cname = $this->input->post('cname');
		$caddr = $this->input->post('caddr');
	
		return $this->db->query("call add_complex(".$this->db->escape($cname).",
				 ".$this->db->escape($caddr).");");
	}
}