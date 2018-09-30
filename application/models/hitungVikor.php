<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hitungVikor extends CI_Model {

	public function ambil($where)
	{

		// var_dump($where);

		$where1 = ''; 
        if (count($where) > 0) 
        { 
          $where1 = ' WHERE tb_mobil.'.implode(' AND tb_mobil.',$where); 
        } 

        // $sql = mysql_query("SELECT * FROM mytable ORDER BY id DESC $limit" .$where);//**  
        // $result=mysql_query($sql);
        // while ($row = mysql_fetch_assoc($result)) {
        // echo $row['cuisine'];
        // echo $row['Jobs'];

        // echo $where1
        // echo 'select id_mobil as id_mobil, harga as harga,  kapasitas_silinder as kapasitas_silinder, kapasitas_penumpang as kapasitas_penumpang from  tb_mobil '. $where1;


     
	// return $this->db->query('select id_mobil as id_mobil, harga as harga,  kapasitas_silinder as kapasitas_silinder, kapasitas_penumpang as kapasitas_penumpang from  tb_mobil '. $where1)->result();
		$hasil = $this->db->query('select id_mobil as id_mobil, harga as harga,  kapasitas_silinder as kapasitas_silinder, kapasitas_penumpang as kapasitas_penumpang from tb_mobil '. $where1);
		if($this->db->affected_rows() >0)
		{
			return $hasil->result();
		}
		else return "no_row_affected";
	}
	public function selectOrder($order)
	{

		// var_dump($order);

        $sortVal = 1;
		foreach($order as $key=>$value) {
			// echo($key."       ");
	  		$cases[] = sprintf('%s ', $key);
		}
		// var_dump($cases);
		$order_by = 'ORDER BY field(id_mobil, ' . implode(",",$cases) . ')';
		$where = 'where id_mobil in( ' . implode(",",$cases) . ')';
        // var_dump($order_by);
		// $sql = mysql_query("SELECT * FROM mytable ORDER BY id DESC $limit" .$where);//**  
        // $result=mysql_query($sql);
        // while ($row = mysql_fetch_assoc($result)) {
        // echo $row['cuisine'];
        // echo $row['Jobs'];

        // echo $where1

		// echo 'select * from  tb_mobil '.$order_by;
	$hasil = $this->db->query('select * from  tb_mobil '.$where.$order_by);
	// echo 'select * from  tb_mobil '.$where.$order_by;
		// $hasil = $this->db->query('select tb_alternatif.id_mobil as id_mobil, tb_alternatif.harga as harga,  tb_alternatif.kapasitas_silinder as kapasitas_silinder, tb_alternatif.kapasitas_penumpang as kapasitas_penumpang  from tb_alternatif join tb_mobil on tb_alternatif.id_mobil = tb_mobil.id_mobil'. $where1);
		if($this->db->affected_rows() >0)
		{
			return $hasil->result();
		}
		else return "no_row_affected";
	}
	public function f_max_min($mobil)
	{
		$aaa = max(array_column($mobil, "kapasitas_penumpang"));
		// echo "max harga = " . $aaa . "         -                ";

		$max["harga"] = min(array_column($mobil, "harga"));
		$max["kapasitas_silinder"] = max(array_column($mobil, "kapasitas_silinder"));
		$max["kapasitas_penumpang"] = max(array_column($mobil, "kapasitas_penumpang"));

		$min["harga"] = max(array_column($mobil, "harga"));
		$min["kapasitas_silinder"] = min(array_column($mobil, "kapasitas_silinder"));
		$min["kapasitas_penumpang"] = min(array_column($mobil, "kapasitas_penumpang"));
		

		// $this->db->select('min(harga) AS fMaxHarga, max(kapasitas_silinder) AS fMaxSilinder, max(kapasitas_penumpang) AS fMaxPenumpang');
		// $max = $this->db->get('tb_alternatif');
		// $this->db->select('max(harga) AS fMinHarga, min(kapasitas_silinder) AS fMinSilinder, min(kapasitas_penumpang) AS fMinPenumpang');
		// $min = $this->db->get('tb_alternatif');
		// var_dump($max->result());


		$max_min["max"] = $max;
		$max_min["min"] = $min;
		// var_dump($max_min);
		return $max_min;
	}

	public function normalisasi_matriks($fmax,$fij,$fmin)
	{
		if(($fmax-$fmin)==0){
			return ($fmax-$fij);
		}
		$r=($fmax-$fij)/($fmax-$fmin);
		return $r;
	}

	public function normalisasi_bobot($bobot,$r)
	{
		$hasil = $bobot*$r;
		return $hasil;
	}

	public function utility($hasil_array)
	{
		$s = array_sum($hasil_array);
		return $s;
	}

	public function regret($hasil_array)
	{
		$r = max($hasil_array);
		return $r;
	}

	public function max_min_item($item)
	{
		$max_min = array('max' =>max($item),'min' => min($item) );
		return $max_min;
	}


	public function indeks_vikor($sj,$smax_min,$rj,$rmax_min)
	{
		$smax = $smax_min["max"];
		$smin = $smax_min["min"];
		$rmax = $rmax_min["max"];
		$rmin = $rmax_min["min"];
		$q = ((($sj-$smin)/($smax-$smin))*0.5+(($rj-$rmin)/($rmax-$rmin)*(1-0.5)));
			return $q;
	}

}

/* End of file hitungVikor.php */
/* Location: ./application/models/hitungVikor.php */