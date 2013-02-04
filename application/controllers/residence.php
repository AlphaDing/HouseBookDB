<?php
class residence extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('complex_model');
	}

	public function addResidence()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		//$this->form_validation->set_rules('cname', 'Complex name', 'trim|required|is_unique[Complex.cname]|xss_clean');
		//$this->form_validation->set_rules('caddr', 'Complex address', 'trim|required|[Complex.caddr]|xss_clean');	

		$this->load->view('addComplex');
	}
	
	public function displayResidence()
	{
		$this->load->view('residence');
		
	}
}
?>

