<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	// function to read tb_mobil
	function read_mobil(){
		return $this->db->query('select * from tb_mobil');
	}
	function read_mobil_edit($id_mobil){
		$aa = $id_mobil;
		// echo "aaaa" . $aa;
		// sleep(5);

		return $this->db->query('select * from tb_mobil where id_mobil = ' .$aa);
	}
	// function untuk melakukan insert data ke tb_mobil tb_alternatif
	function insert_data($data_create){
		// echo "<table>";
		// foreach ($data_create as $key => $value) {
		// 	echo "<tr><td>".$key."</td><td>".$value."</td><tr>";
		// }
		// echo "</table>";

		$sql = sprintf("INSERT INTO `tb_mobil` ( `merk`, `tipe`, `harga`, `jenis_mesin`, `kapasitas_penumpang`, `kapasitas_silinder`, `kategori_mobil`, `transmisi`, `uri_gambar`, `created_by`) VALUES ( '%s', '%s', '%f', '%s', '%f', '%f', '%s', '%s', '%s', '%s')",$data_create['merk_mobil'],$data_create['tipe_mobil'],$data_create['harga_mobil'],$data_create['jenis_mesin'],$data_create['kapasitas_penumpang'],$data_create['kapasitas_silinder'],$data_create['kategori_mobil'],$data_create['transmisi'],$data_create['gambar_url'],$this->session->userdata("id"));
		// echo $sql;
		$this->db->query($sql);  
		$aa = $this->db->query("select LAST_INSERT_ID() 'idMobil'");

		$id_mobil = $aa->row()->idMobil;

		// melakukan function data_convert
		$data_convert = $this->convert($data_create);
		// echo "convert";
		// echo "<table>";
		// foreach ($data_convert as $key => $value) {
		// 	echo "<tr><td>".$key."</td><td>".$value."</td><tr>";
		// }
		// echo "</table>";


		$sql = sprintf("INSERT INTO `tb_alternatif` ( `harga`, `kapasitas_penumpang`, `kapasitas_silinder`,`id_mobil`) VALUES ( '%f','%f','%f','%f')",$data_convert['harga_mobil'],$data_convert['kapasitas_penumpang'],$data_convert['kapasitas_silinder'],$id_mobil);
		$this->db->query($sql);

	}

	//function untuk melakukan konversi dari data mobil ke data alternatif
	function convert($data_mobil){
		// convert harga mobil
		if($data_mobil["harga_mobil"]>600000000)
		{
			$data_convert["harga_mobil"] = 5;
		}
		elseif ($data_mobil["harga_mobil"]<=600000000 && $data_mobil["harga_mobil"]>450000000) 
		{
			$data_convert["harga_mobil"] = 4;
		}
		elseif ($data_mobil["harga_mobil"]<=450000000 && $data_mobil["harga_mobil"]>300000000) 
		{
			$data_convert["harga_mobil"] = 3;
		}
		elseif ($data_mobil["harga_mobil"]<=300000000 && $data_mobil["harga_mobil"]>150000000) 
		{
			$data_convert["harga_mobil"] = 2;
		}
		elseif ($data_mobil["harga_mobil"]<=150000000 ) 
		{
			$data_convert["harga_mobil"] = 1;
		}

		// convert kapasitas penumpang
		if($data_mobil["kapasitas_penumpang"]>8)
		{
			$data_convert["kapasitas_penumpang"] = 5;
		}
		elseif ($data_mobil["kapasitas_penumpang"]<=8 && $data_mobil["kapasitas_penumpang"]>6) 
		{
			$data_convert["kapasitas_penumpang"] = 4;
		}
		elseif ($data_mobil["kapasitas_penumpang"]<=6 && $data_mobil["kapasitas_penumpang"]>4) 
		{
			$data_convert["kapasitas_penumpang"] = 3;
		}
		elseif ($data_mobil["kapasitas_penumpang"]<=4 && $data_mobil["kapasitas_penumpang"]>2) 
		{
			$data_convert["kapasitas_penumpang"] = 2;
		}
		elseif ($data_mobil["kapasitas_penumpang"]<=2 ) 
		{
			$data_convert["kapasitas_penumpang"] = 1;
		}


		// convert kapasitas_silinder
		if($data_mobil["kapasitas_silinder"]>2500)
		{
			$data_convert["kapasitas_silinder"] = 5;
		}
		elseif ($data_mobil["kapasitas_silinder"]<=2500 && $data_mobil["kapasitas_silinder"]>2000) 
		{
			$data_convert["kapasitas_silinder"] = 4;
		}
		elseif ($data_mobil["kapasitas_silinder"]<=2000 && $data_mobil["kapasitas_silinder"]>1500) 
		{
			$data_convert["kapasitas_silinder"] = 3;
		}
		elseif ($data_mobil["kapasitas_silinder"]<=1500 && $data_mobil["kapasitas_silinder"]>1000) 
		{
			$data_convert["kapasitas_silinder"] = 2;
		}
		elseif ($data_mobil["kapasitas_silinder"]<=1000 ) 
		{
			$data_convert["kapasitas_silinder"] = 1;
		}
		
		// var_dump($data_convert)
		return $data_convert;
	}

	function edit_data($data_edit){
		// echo "<table>";
		// foreach ($data_create as $key => $value) {
		// 	echo "<tr><td>".$key."</td><td>".$value."</td><tr>";
		// }
		// echo "</table>";
		if($data_edit["gambar_url"]==null){

			$sql = sprintf("UPDATE `tb_mobil` SET `merk` = '%s', `tipe` = '%s', `harga` = '%f', `jenis_mesin` = '%s', `kapasitas_penumpang` = '%f', `kapasitas_silinder` = '%f', `kategori_mobil` = '%s', `transmisi` = '%s' WHERE `tb_mobil`.`id_mobil` = %f ",$data_edit['merk'],$data_edit['tipe'],$data_edit['harga_mobil'],$data_edit['jenis_mesin'],$data_edit['kapasitas_penumpang'],$data_edit['kapasitas_silinder'],$data_edit['kategori_mobil'],$data_edit['transmisi'],$data_edit['id_mobil']);
		}
		else{
			$sql = sprintf("UPDATE `tb_mobil` SET `merk` = '%s', `tipe` = '%s', `harga` = '%f', `jenis_mesin` = '%s', `kapasitas_penumpang` = '%f', `kapasitas_silinder` = '%f', `kategori_mobil` = '%s', `transmisi` = '%s', `uri_gambar` = '%s' WHERE `tb_mobil`.`id_mobil` = %f ",$data_edit['merk'],$data_edit['tipe'],$data_edit['harga_mobil'],$data_edit['jenis_mesin'],$data_edit['kapasitas_penumpang'],$data_edit['kapasitas_silinder'],$data_edit['kategori_mobil'],$data_edit['transmisi'],$data_edit['gambar_url'],$data_edit['id_mobil']);
		}
		var_dump($sql);
		$this->db->query($sql);  
		$data_mobil = $data_edit;
		// melakukan function data_convert
		$data_convert = $this->convert($data_mobil);
		echo "convert";
		echo "<table>";
		foreach ($data_convert as $key => $value) {
			echo "<tr><td>".$key."</td><td>".$value."</td><tr>";
		}
		echo "</table>";
		// sleep(5);


		$sql = sprintf("UPDATE `tb_alternatif` SET `harga` = '%f', `kapasitas_penumpang` = '%f', `kapasitas_silinder` = '%f' WHERE `tb_alternatif`.`id_mobil` = %f",$data_convert['harga_mobil'],$data_convert['kapasitas_penumpang'],$data_convert['kapasitas_silinder'],$data_edit['id_mobil']);
		$this->db->query($sql);

	}

	function delete($data_delete){
		
			$sql = sprintf("DELETE from `tb_alternatif` WHERE `tb_alternatif`.`id_mobil` = %f ",$data_delete);
		var_dump($sql);
		$this->db->query($sql);  
		echo $this->db->affected_rows();
		

		$sql = sprintf("DELETE FROM `tb_mobil` WHERE `tb_mobil`.`id_mobil` = %f",$data_delete);
		$this->db->query($sql);
		$a1 = $this->db->affected_rows();
		return $a1;

	}
}

/* End of file m_admin.php */
/* Location: ./application/models/m_admin.php */