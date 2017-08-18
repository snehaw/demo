<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->layout->template_page('admin/dashboard');
	}

	/**
	* Used for admin login
	* @return void
	**/
	public function login()
	{
		$this->layout->template_page('admin/login');
	}

}

/* End of file Admin.php */
/* Location: .//opt/lampp/htdocs/demo/blog/controllers/Admin.php */