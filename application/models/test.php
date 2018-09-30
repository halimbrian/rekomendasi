<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test extends CI_Model {

	

	public function bacadb(){
		$this->load->database();
		$query = $this->db->query('select * from tb_login');
		foreach ($query->result_array() as $row)
		{
		        echo $row['id_user'];
		        echo $row['username'];
		        echo $row['password'];
		}
	}

}

/* End of file test.php */
/* Location: ./application/models/test.php */