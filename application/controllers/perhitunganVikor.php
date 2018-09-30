<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PerhitunganVikor extends CI_Controller {

	public function index()
	{
		$this->load->model('hitungVikor');

		$bobot = array('harga' => 0.4,'kapasitas_silinder' => 0.3,'kapasitas_penumpang' => 0.3 );
		
		$aa = $this->hitungVikor->ambil();
		// var_dump($aa);
		foreach ($aa as $key) {

				$mobil["mobil ".$key->id_mobil]["harga"] = $key->harga;
				$mobil["mobil ".$key->id_mobil]["kapasitas_silinder"] = $key->kapasitas_silinder;
				$mobil["mobil ".$key->id_mobil]["kapasitas_penumpang"] = $key->kapasitas_penumpang;
		}
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
		$max_min = $this->hitungVikor->f_max_min($mobil);
		// var_dump($max_min);
		// echo "min_max";
		// echo "<table><tbody>";
		// foreach ($max_min as $key=>$item) {
			// echo "<tr><td>$key</td>";
			// foreach ($item as $key1) {
				// echo "<td>$key1</td>";
			// }
			// echo "</tr>";
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
		// echo "</table></tbody>";
		// echo '<pre>';var_dump($normalisasi_matriks);echo '</pre>';
		// echo "normalisasi matriks:";
		// echo "<table><tbody>";
		// echo $max_min["max"]["harga"];
		// foreach ($normalisasi_matriks as $key=>$item) {
			// echo "<tr><td>$key</td>";
			// $normalisasi_matriks["$key"] = array();
			// foreach ($item as $key1=>$item1) {
				// echo "<td>$item1</td>";
				
			// }
			// echo "</tr>";
		// }
		// echo "</table></tbody>";

		// normalisasi bobot
		echo "normalisasi bobot";
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

		// echo "utility";
		// echo "<table><tbody>";
		// foreach ($utility as $key => $value) {
		// 	echo "<tr><td>$key</td>";
		// 	echo "<td>$value</td></tr>";
		// }
		// echo "</tbody></table>";

		echo "regret";
			echo "<table><tbody>";
		foreach ($regret as $key => $value) {
			echo "<tr><td>$key</td>";
			echo "<td>$value</td></tr>";
		}
		echo "</tbody></table>";



		// indeks vikor
		echo "indeks vikor";

		$smax_min = $this->hitungVikor->max_min_item($utility);
		$rmax_min = $this->hitungVikor->max_min_item($regret);
		// echo '<pre>';var_dump($rmax_min);echo '</pre>';
		

		// foreach ($mobil as $key => $value) {
		// 	$q[$key]= $this->hitungVikor->indeks_vikor($utility[$key],$smax_min,$regret[$key],$rmax_min);
		// }

		// 	echo "<table><tbody>";
		// foreach ($q as $key => $value) {
		// 	echo "<tr><td>$key</td>";
		// 	echo "<td>$value</td></tr>";
		// }
		// echo "</tbody></table>";


	}


}

/* End of file perhitunganVikor.php */
/* Location: ./application/controllers/perhitunganVikor.php */