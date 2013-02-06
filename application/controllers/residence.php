<?php
class residence extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	//$this->load->model('complex_model');
	// }

	public function listAllResidences()
	{
		$data['res_list'] = array('Sycamore Terrace 277', 'Village Quarter 69', 'Ashley Apartments 101');
		$data['title'] = "This is a title for the residence class";
		$data['heading'] = "This is a heading for the residence class";

		$this->load->view('all_residence_view', $data);
	}



	public function addResidence()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		// $this->form_validation->set_rules('cname', 'Complex name', 'trim|required|is_unique[Complex.cname]|xss_clean');
		// $this->form_validation->set_rules('caddr', 'Complex address', 'trim|required|[Complex.caddr]|xss_clean');	
		$this->form_validation->set_rules('Res_name', 'Residence Name', 'trim|required|is_unique[Residence.Res_name]|xss_clean');
		$this->form_validation->set_rules('Address', 'Residence Address', 'trim|required|is_unique[Residence.Res_name]|xss_clean');

		$this->load->view('addResidence');
	}
	
	public function displayResidence()
	{
		$this->load->view('residence');
		
	}
}
?>

