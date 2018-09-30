<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftar_mobil extends CI_Controller {

	public function index()
	{
		$this->load->view('user/header',['active'=>"daftar_mobil_nav"]);
		// $this->load->view('user/vikor');
		$this->load->model('userModel');
		$mobil = $this->userModel->getMobil()->result();
		// var_dump($mobil);
		$this->load->view('user/daftar_mobil', ['mobil'=>$mobil]);
	}
	public function getdetails()
	{
		$id = $this->input->post('id');
		// var_dump($id);
		$this->load->model('userModel');
		$mobil = $this->userModel->getDetails($id)->result();
		// var_dump($mobil);
		// echo $mobil[0]->uri_gambar;
		// echo base_url("uploads/$mobil[0]->uri_gambar");
		$this->load->view('user/detail_mobil', ['mobil'=>$mobil]);
	}

}

/* End of file daftar_mobil.php */
/* Location: ./application/controllers/daftar_mobil.php */