<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	function getMobil(){
		return $this->db->query('SELECT * FROM `tb_mobil` ORDER BY `tb_mobil`.`created_at` DESC ');
	}
	function getDetails($id){
		return $this->db->query('SELECT * FROM `tb_mobil` where `tb_mobil`.`id_mobil`= '."$id".' ');
	}

}

/* End of file userModel.php */
/* Location: ./application/models/userModel.php */