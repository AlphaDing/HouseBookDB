<?php
class Signup extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('signup_model');

	}
	public function index()
	{
		$this->load->view('signup_view');
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('email', 'User Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');	
		$this->form_validation->set-rules('year', 'Graduation year', 'required');
		
		
		
		
		if ($this->form_validation->run() === FALSE)
		{
		
			$this->load->view('signup_view');
		
		}
		else
		{
			$this->user_model->add_user();	
			$this->load->view('login_view');
		}
	}
	
	public function rinima() {
		//$this->load->view('rinimaview');
		echo 'cao ni ma';		
	}
	
}
?>