<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekomendasi extends CI_Controller {

	public function index()
	{
		$this->load->view('user/header',['active'=>"rekomendasi_nav"]);
		$this->load->view('user/vikor');
	}
	public function hasil()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('harga_bobot','Bobot Harga','required');
		$this->form_validation->set_rules('kapasitas_silinder_bobot','Bobot Kapasitas Silinder','required');
		$this->form_validation->set_rules('kapasitas_penumpang_bobot','Bobot Kapasitas Penumpang','required');

		if($this->form_validation->run() != false){
			echo "Form validation oke";
		
		$this->load->view('user/header',['active'=>"rekomendasi_nav"]);


		// vikor

			$this->load->model('hitungVikor');


			$bobot_harga_mobil = $this->input->post('harga_bobot');
			$bobot_kapasitas_penumpang = $this->input->post('kapasitas_penumpang_bobot');
			$bobot_kapasitas_silinder = $this->input->post('kapasitas_silinder_bobot');
			$bobot = ["harga"=>$bobot_harga_mobil/($bobot_harga_mobil+$bobot_kapasitas_silinder+$bobot_kapasitas_penumpang),"kapasitas_penumpang"=>$bobot_kapasitas_penumpang/($bobot_harga_mobil+$bobot_kapasitas_silinder+$bobot_kapasitas_penumpang),"kapasitas_silinder"=>$bobot_kapasitas_silinder/($bobot_harga_mobil+$bobot_kapasitas_silinder+$bobot_kapasitas_penumpang)];
			$step["bobot"] = $bobot;
		
		// var_dump($aa);

		
		$pref_kategori= $this->input->post('kategori_mobil_preference');
		$pref_transmisi= $this->input->post('transmisi_preference');
		$pref_penumpang= $this->input->post('kapasitas_penumpang_preference');
		$pref_mesin= $this->input->post('jenis_mesin_preference');
		$where = array();
		if($this->input->post('merk_preference')!= "Semua")
		{
			$where["merk"] = "merk = '".$this->input->post('merk_preference')."'";
		}

		if($this->input->post('harga_preference')!= "0")
		{
			if($this->input->post('harga_preference') == 1){
				$where["harga"] = "harga <=150000000";
			} 
			if($this->input->post('harga_preference') == 2){
				$where["harga"] = "harga between 150000001 and 300000000";
			} 
			if($this->input->post('harga_preference') == 3){
				$where["harga"] = "harga between 300000001 and 450000000";
			} 
			if($this->input->post('harga_preference') == 4){
				$where["harga"] = "harga between 450000001 and 600000000";
			} 
			if($this->input->post('harga_preference') == 5){
				$where["harga"] = "harga >600000000";
			} 
		}
		if($this->input->post('silinder_preference') != "0")
		{
			if($this->input->post('silinder_preference') == 1){
				$where["kapasitas_silinder"] = "kapasitas_silinder <=1000";
			} 
			if($this->input->post('silinder_preference') == 2){
				$where["kapasitas_silinder"] = "kapasitas_silinder between 1001 and 1500";
			} 
			if($this->input->post('silinder_preference') == 3){
				$where["kapasitas_silinder"] = "kapasitas_silinder between 1501 and 2000";
			} 
			if($this->input->post('silinder_preference') == 4){
				$where["kapasitas_silinder"] = "kapasitas_silinder between 2501 and 3000";
			} 
			if($this->input->post('silinder_preference') == 5){
				$where["kapasitas_silinder"] = "kapasitas_silinder >3000";
			} 
		}
		if ($this->input->post('kategori_mobil_preference')!="0") 
		{
			if($this->input->post('kategori_mobil_preference') == 1){
				$where["kategori_mobil"] = "kategori_mobil = 'Coupe'";
			} 
			if($this->input->post('kategori_mobil_preference') == 2){
				$where["kategori_mobil"] = "kategori_mobil = 'Hybrid'";
			} 
			if($this->input->post('kategori_mobil_preference') == 3){
				$where["kategori_mobil"] = "kategori_mobil = 'Commercial'";
			} 
			if($this->input->post('kategori_mobil_preference') == 4){
				$where["kategori_mobil"] = "kategori_mobil = 'Hatchback'";
			} 
			if($this->input->post('kategori_mobil_preference') == 5){
				$where["kategori_mobil"] = "kategori_mobil = 'Sedan'";
			} 
			if($this->input->post('kategori_mobil_preference') == 6){
				$where["kategori_mobil"] = "kategori_mobil = 'SUV'";
			} 
			if($this->input->post('kategori_mobil_preference') == 7){
				$where["kategori_mobil"] = "kategori_mobil = 'MPV'";
			} 
		}
		if ($this->input->post('transmisi_preference')!="0") 
		{
			if($this->input->post('transmisi_preference') == 1){
				$where["transmisi"] = "transmisi = 'A/T'";
			} 
			if($this->input->post('transmisi_preference') == 2){
				$where["transmisi"] = "transmisi = 'M/T'";
			} 
				
		}
		if ($this->input->post('kapasitas_penumpang_preference')!="0") 
		{
			if($this->input->post('kapasitas_penumpang_preference') == 1){
				$where["kapasitas_penumpang"] = "kapasitas_penumpang <=2";
			} 
			if($this->input->post('kapasitas_penumpang_preference') == 2){
				$where["kapasitas_penumpang"] = "kapasitas_penumpang between 3 and 4";
			} 
			if($this->input->post('kapasitas_penumpang_preference') == 3){
				$where["kapasitas_penumpang"] = "kapasitas_penumpang between 5 and 6";
			} 
			if($this->input->post('kapasitas_penumpang_preference') == 4){
				$where["kapasitas_penumpang"] = "kapasitas_penumpang between 7 and 8";
			} 
			if($this->input->post('kapasitas_penumpang_preference') == 5){
				$where["kapasitas_penumpang"] = "kapasitas_penumpang >8";
			} 

		}
		if ($this->input->post('jenis_mesin_preference')!="0") 
		{
			if($this->input->post('jenis_mesin_preference') == 1){
				$where["jenis_mesin"] = "jenis_mesin = 'DOHC'";
			} 
			if($this->input->post('jenis_mesin_preference') == 2){
				$where["jenis_mesin"] = "jenis_mesin = 'SOHC'";
			} 
		}

		
		$aa = $this->hitungVikor->ambil($where);
		// var_dump($aa);
		if($aa != "no_row_affected")
		{
// tabel akternatif
			foreach ($aa as $key) {

					$mobil[$key->id_mobil]["harga"] = $key->harga;
					$mobil[$key->id_mobil]["kapasitas_silinder"] = $key->kapasitas_silinder;
					$mobil[$key->id_mobil]["kapasitas_penumpang"] = $key->kapasitas_penumpang;
			}
			$step["tabel_alternatif"]= $aa;
			// echo "tabel alternatif";
			// echo "<table><tbody>";
			// foreach ($mobil as $key=>$item) {
			// 	echo "<tr><td>$key</td>";
			// 	foreach ($item as $key1) {
			// 		echo "<td>$key1</td>";
			// 	}
			// 	echo "</tr>";
			// }
			// echo "</tbody></table>";
	// end tabel alternatif
	// min max
			$max_min = $this->hitungVikor->f_max_min($mobil);
			if($max_min["max"]==$max_min["min"]){
				foreach ($aa as $key) {

					$aaaa[$key->id_mobil] = $key->id_mobil;
				}
				$aaa = $this->hitungVikor->selectOrder($aaaa);
				// var_dump($aaaa);
				$this->load->view('user/daftar_mobil',["mobil"=>$aaa]);
			}
			else{
				$step["max_min"]= $max_min;
				var_dump($max_min["max"]==$max_min["min"]);
				// echo "min_max";
				// echo "<table><tbody>";
				// foreach ($max_min as $key=>$item) {
				// 	echo "<tr><td>$key</td>";
				// 	foreach ($item as $key1) {
				// 		echo "<td>$key1</td>";
				// 	}
				// 	echo "</tr>";
				// }
				// echo "</tbody></table>";
				// echo "<table><tbody>";
				// echo $max_min["max"]["harga"];
				foreach ($mobil as $key=>$item) {
					// echo "<tr><td>$key</td>";
					// $normalisasi_matriks["$key"] = array();
					foreach ($item as $key1=>$item1) {
						// echo "<td>$item1</td>";
						// echo "<td>". $max_min["max"]["$key1"] ."</td>";
						// echo "<td>". $max_min["min"]["$key1"] ."</td>";
						$normalisasi_matriks["$key"]["$key1"] = $this->hitungVikor->normalisasi_matriks($max_min["max"]["$key1"],$item1,$max_min["min"]["$key1"]) ;

					}
					// echo "</tr>";
				}
				$step["normalisasi_matriks"] = $normalisasi_matriks;
				// echo "</table></tbody>";
		// end min max
				// echo '<pre>';var_dump($normalisasi_matriks);echo '</pre>';
				// echo "normalisasi matriks:";
				// echo "<table><tbody>";
				// // echo $max_min["max"]["harga"];
				// foreach ($normalisasi_matriks as $key=>$item) {
				// 	echo "<tr><td>$key</td>";
				// 	// $normalisasi_matriks["$key"] = array();
				// 	foreach ($item as $key1=>$item1) {
				// 		echo "<td>$item1</td>";
						
				// 	}
				// 	echo "</tr>";
				// }
				// echo "</table></tbody>";

				// normalisasi bobot
				// echo "normalisasi bobot";
				// echo "<table><tbody>";
				// echo $max_min["max"]["harga"];
				foreach ($normalisasi_matriks as $key=>$item) {
					// echo "<tr><td>$key</td>";
					// $normalisasi_matriks["$key"] = array();
					foreach ($item as $key1=>$item1) {
						$normalisasi_bobot["$key"]["$key1"]=$this->hitungVikor->normalisasi_bobot($bobot[$key1],$item1);
						// echo "<td>$item1</td>";
						
					}
					// echo "</tr>";
				}
				$step["normalisasi_bobot"]= $normalisasi_bobot;
				// echo "</table></tbody>";
				// echo '<pre>';var_dump($normalisasi_bobot);echo '</pre>';
				// echo "<table><tbody>";
				// echo $max_min["max"]["harga"];
				// foreach ($normalisasi_bobot as $key=>$item) {
					// echo "<tr><td>$key</td>";
					// $normalisasi_matriks["$key"] = array();
					// foreach ($item as $key1=>$item1) {
						// $normalisasi_bobot["$key"]["$key1"]=$this->hitungVikor->normalisasi_bobot($bobot[$key1],$item1);
						// echo "<td>$item1</td>";
						
					// }
					// echo "</tr>";
				// }
				// echo "</table></tbody>";

				// mencari s dan r
				// echo "s dan r";
				// echo '<pre>';var_dump($normalisasi_bobot);echo '</pre>';
				foreach ($normalisasi_bobot as $key=>$item) {
					$utility["$key"]= $this->hitungVikor->utility($item);
					 // echo '<pre>';var_dump($item);echo '</pre>';
					$regret["$key"]= $this->hitungVikor->regret($item);
						// foreach ($item as $key1=>$item1) {
						// 	$normalisasi_bobot["$key"]["$key1"]=$this->hitungVikor->normalisasi_bobot($bobot[$key1],$item1);
							// echo "<td>$item1</td>";
							
						// }
						// echo "</tr>";
				}
				$step["utility"]= $utility;
				$step["regret"] = $regret;

				// echo "utility";
				// echo "<table><tbody>";
				// foreach ($utility as $key => $value) {
				// 	echo "<tr><td>$key</td>";
				// 	echo "<td>$value</td></tr>";
				// }
				// echo "</tbody></table>";

				// echo "regret";
					// echo "<table><tbody>";
				// foreach ($regret as $key => $value) {
					// echo "<tr><td>$key</td>";
					// echo "<td>$value</td></tr>";
				// }
				// echo "</tbody></table>";



				// indeks vikor
				// echo "indeks vikor";

				$smax_min = $this->hitungVikor->max_min_item($utility);
				$rmax_min = $this->hitungVikor->max_min_item($regret);
				// echo '<pre>';var_dump($rmax_min);echo '</pre>';
				
				$step["smax_min"] = $smax_min;
				$step["rmax_min"] = $rmax_min;

				foreach ($mobil as $key => $value) {
					$q[$key]= $this->hitungVikor->indeks_vikor($utility[$key],$smax_min,$regret[$key],$rmax_min);
				}
				$step["indeks_vikor"] = $q;

					// echo "<table><tbody>";
				// foreach ($q as $key => $value) {
					// echo "<tr><td>$key</td>";
					// echo "<td>$value</td></tr>";
				// }
				// echo "</tbody></table>";

				// echo "<br><b>aaaaaaaaaaaaaaaaaa<b><br><br><table border = 1><tbody>";
				asort($q);
				$step["sorted"] = $q;
				// var_dump($step);
				$aaa = $this->hitungVikor->selectOrder($q);
				// var_dump($aaa);
				$this->load->view('user/daftar_mobil',["mobil"=>$aaa,"langkah"=>$step]);
			
				// echo "</tbody></table>";


			}
		}
			// jika tidak terdapat data
		else{
			$msg = "Tidak ada mobil yang sesuai ";
			$this->load->view('user/daftar_mobil',["msg"=>$msg]);
		}
		}else{
			$this->load->view('user/header',['active'=>"rekomendasi_nav"]);
		$this->load->view('user/vikor');
		}
	

	}


}

/* End of file rekomendasi.php */
/* Location: ./application/controllers/rekomendasi.php */