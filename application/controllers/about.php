<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$this->load->view('user/header',['active'=>"about"]);
		// $this->load->view('user/vikor');
		// var_dump($mobil);
		$this->load->view('user/about');
	}

}

/* End of file about.php */
/* Location: ./application/controllers/about.php */