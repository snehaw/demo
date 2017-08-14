<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		redirect('user/login');
		// $this->auth->login();
	}

	public function login()
	{
		
		//$this->layout->view_element('user/login');
	}

}

/* End of file User.php */
/* Location: .//opt/lampp/htdocs/demo/blog/controllers/User.php */