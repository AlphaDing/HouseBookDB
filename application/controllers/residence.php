<?php
class residence extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}
	
	public function displayResidence()
	{
		$this->load->view('residence');
		
	}
}
?>

