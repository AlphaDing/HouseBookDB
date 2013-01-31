<?php
class Signup extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('signup_model');
	}

	public function register()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'User Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');	
		$this->form_validation->set-rules('year', 'Graduation year', 'required');

		if ($this->form_validation->run() === FALSE)
		{

			$this->load->view('register');

		}
		else
		{
			$this->user_model->add_user();	
			$this->load->view('login_view');
		}
	}
}
