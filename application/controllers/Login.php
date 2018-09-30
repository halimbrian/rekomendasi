<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('admin/login');
	}

	function aksi_login(){
		// $this->load->view('admin/login');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("tb_login",$where)->num_rows();
		if($cek > 0){
			$a = $this->m_login->cek_login("tb_login",$where)->row();
			echo $a->id_user;
			$data_session = array(
				'id' => $a->id_user,
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			 redirect(base_url("admin"));

			}
		}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}