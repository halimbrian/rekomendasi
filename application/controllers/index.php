<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index extends CI_Controller {

	public function index()
	{
		
		$this->load->view('user/daftar_mobil');
	}

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */