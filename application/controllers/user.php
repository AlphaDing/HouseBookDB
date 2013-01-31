<?php
class user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function register()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|is_unique[User.email]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[100]|xss_clean');	
		
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
