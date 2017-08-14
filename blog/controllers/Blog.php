<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->layout->home_layout('demo');
	}

	public function blogs()
	{

	}

	public function read()
	{

	}

	public function create()
	{
		$this->layout->general_layout('create');
	}
}

/* End of file Blog.php */
/* Location: .//opt/lampp/htdocs/demo/blog/controllers/Blog.php */