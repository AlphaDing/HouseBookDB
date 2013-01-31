<?php if (!defined('BASEPATH')) die();
class Login extends Main_Controller {

   public function index()
	{
	  $this->load->view('include/header');
	  $this->load->view('login');
	  $this->load->view('include/footer');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
