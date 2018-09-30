<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$data_mobil = $this->m_admin->read_mobil()->result();
		
		// echo "<script type='text/javascript'>alert($a);</script>";
		$this->load->view('admin/v_admin',['data_mobil'=>$data_mobil]);
	}


	function add_data(){
		if ($this->input->server('REQUEST_METHOD') == 'POST'){
			// echo "<script type='text/javascript'>alert('lkjlkj');</script>";

			// Config for upload library
			// $config['file_name'] = $this->input->post('tipe_mobil');
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '1000000';
			
			// load library
			$this->load->library('upload', $config);
			
			// initialisasi config untuk upload
			$this->upload->initialize($config);
			$gambar_url = $this->input->post('gambar_url');
var_dump($this->input->post('gambar_url'));
			

			

			// Prosess upload
			// jika tidak dapat upload
			if ( ! $this->upload->do_upload("gambar_url")){
				var_dump($gambar_url);
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin/error',['data'=>$error]);
			}
			// jika berhasil upload
			else{
				$data = $this->upload->data();
				echo "success";

			// Mengambil data dari view
			$merk_mobil = $this->input->post('merk_mobil');
			$tipe_mobil = $this->input->post('tipe_mobil');
			$kategori_mobil = $this->input->post('kategori_mobil');
			$harga_mobil = $this->input->post('harga_mobil');
			$kapasitas_penumpang = $this->input->post('kapasitas_penumpang');
			$kapasitas_silinder = $this->input->post('kapasitas_silinder');
			$transmisi = $this->input->post('transmisi');
			$jenis_mesin = $this->input->post('jenis_mesin');


				// binding data ke array
				$data_create = array('merk_mobil' => $merk_mobil,'tipe_mobil' => $tipe_mobil,'kategori_mobil' => $kategori_mobil,'harga_mobil' => $harga_mobil,'kapasitas_penumpang' => $kapasitas_penumpang,'kapasitas_silinder' => $kapasitas_silinder,'transmisi' => $transmisi,'jenis_mesin' => $jenis_mesin,'gambar_url' => $data['file_name']);
				

				
				// memanggil fungsi models untuk menginsert data
				$this->m_admin->insert_data($data_create);
				redirect(base_url("admin"));
			}
		}
		else
		{
			$this->load->view('admin/v_add_data');
		}
	}



	function edit(){
		if ($this->input->server('REQUEST_METHOD') == 'GET'){
		$data = $this->input->get('id_edit');
		$data_mobil = $this->m_admin->read_mobil_edit($data)->result();
		
		// echo "<script type='text/javascript'>alert($a);</script>";
		// var_dump($data_mobil[0]);
		$this->load->view('admin/v_edit_data',['data_mobil'=>$data_mobil[0]]);
		}

		elseif ($this->input->server('REQUEST_METHOD') == 'POST'){
			// echo "<script type='text/javascript'>alert('lkjlkj');</script>";

			// Config for upload library
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '1000000000';
			
			// load library
			$this->load->library('upload', $config);
			
			// initialisasi config untuk upload
			$this->upload->initialize($config);

			// Mengambil data dari view
			$id_mobil = $this->input->post('id_mobil');
			$merk_mobil = $this->input->post('merk_mobil');
			$tipe_mobil = $this->input->post('tipe_mobil');
			$kategori_mobil = $this->input->post('kategori_mobil');
			$harga_mobil = $this->input->post('harga_mobil');
			$kapasitas_penumpang = $this->input->post('kapasitas_penumpang');
			$kapasitas_silinder = $this->input->post('kapasitas_silinder');
			$transmisi = $this->input->post('transmisi');
			$jenis_mesin = $this->input->post('jenis_mesin');
			$gambar_url = $this->input->post('gambar_url');

			

			// Prosess upload
			
			if ( ! $this->upload->do_upload("gambar_url")){
				$error = array('error' => $this->upload->display_errors());
				if($error[0]='You did not select a file to upload.')
					{
					 // binding data ke array
					$data_edit = array('id_mobil' => $id_mobil, 'merk' => $merk_mobil,'tipe' => $tipe_mobil,'kategori_mobil' => $kategori_mobil,'harga_mobil' => $harga_mobil,'kapasitas_penumpang' => $kapasitas_penumpang,'kapasitas_silinder' => $kapasitas_silinder,'transmisi' => $transmisi,'jenis_mesin' => $jenis_mesin);
					

					
					// memanggil fungsi models untuk menginsert data
					$this->m_admin->edit_data($data_edit);
					redirect(base_url("admin"));
					}
				$this->load->view('admin/error',['data'=>$error]);
			}
			// jika berhasil upload
			else{
				$data = $this->upload->data();
				echo "success";


				// binding data ke array
				$data_edit = array('id_mobil' => $id_mobil, 'merk' => $merk_mobil,'tipe' => $tipe_mobil,'kategori_mobil' => $kategori_mobil,'harga_mobil' => $harga_mobil,'kapasitas_penumpang' => $kapasitas_penumpang,'kapasitas_silinder' => $kapasitas_silinder,'transmisi' => $transmisi,'jenis_mesin' => $jenis_mesin,'gambar_url' => $data['file_name']);
				

				
				// memanggil fungsi models untuk menginsert data
				$this->m_admin->edit_data($data_edit);
				redirect(base_url("admin"));
			}
		}
		
	}

	function delete(){
		$id_mobil = $this->input->post('deleteId');
		$row = $this->m_admin->delete($id_mobil);
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */