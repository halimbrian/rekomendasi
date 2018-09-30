<div class="row">
<?php echo validation_errors('<div class="col-12 alert alert-warning"><strong>Warning!</strong>', '</div>'); ?>
	<div class="ml-5 col-5">
	<h2>Preferensi User</h2>
	<?php echo form_open('rekomendasi/hasil'); ?>
 <!-- <form action="rekomendasi/hasil" method="post"> -->
 	<div class="form-group row">
		<label class="col-form-label col-sm-5">Merk:</label>
		<div class="col-sm-6">
			<select class = "form-control" name="merk_preference">
					<option value="Semua" selected>Semua</option>
					<option value="TOYOTA">Toyota</option>
					<option value="HONDA">Honda</option>
				<option value="DAIHATSU">Daihatsu</option>
			</select> 
		</div>
	</div>
	<div class="form-group row">
		<label class="col-form-label col-sm-5">Harga:</label>
			<div class="col-sm-6">
			<select class = "form-control" name="harga_preference">
  				<option value="0" selected>Semua</option>
  				<option value="1">0 - 150.000.000</option>
  				<option value="2">150.000.001 - 300.000.000</option>
  				<option value="3">300.000.001 - 450.000.000</option>
				<option value="4">450.000.001 - 600.000.000</option>
				<option value="5">>600.000.000</option>
			</select> 
		</div>
	</div>
	<div class="form-group row">
		<label class="col-form-label col-sm-5">Kapasitas Silinder:</label>
			<div class="col-sm-6">
			<select class = "form-control" name="silinder_preference">
  				<option value="0" selected>Semua</option>
  				<option value="1">0 - 1.000</option>
  				<option value="2">1.001 - 1.500</option>
  				<option value="3">1.501 - 2.000</option>
				<option value="4">2.001 - 2.500</option>
				<option value="5">>2.500</option>
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-form-label col-sm-5">Kategori Mobil:</label>
			<div class="col-sm-6">
			<select class = "form-control" name="kategori_mobil_preference">
  				<option value="0" selected>Semua</option>
  				<option value="1">Coupe</option>
  				<option value="2">Hybrid</option>
  				<option value="3">Commercial</option>
				<option value="4">Hatchback</option>
				<option value="5">Sedan</option>
				<option value="8">Sport</option>
				<option value="7">SUV</option>
				<option value="8">MPV</option>
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-form-label col-sm-5">Transmisi:</label>
			<div class="col-sm-6">
			<select class = "form-control" name="transmisi_preference">
  				<option value="0" selected>Semua</option>
  				<option value="1">Automatic</option>
  				<option value="2">Manual</option>
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-form-label col-sm-5">Kapasitas Penumpang:</label>
			<div class="col-sm-6">
			<select class = "form-control" name="kapasitas_penumpang_preference">
  				<option value="0" selected>Semua</option>
  				<option value="1">0 - 2</option>
  				<option value="2">3 - 4</option>
  				<option value="3">5 - 6</option>
				<option value="4">7 - 8</option>
				<option value="5">>8</option>
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-form-label col-sm-5">Jenis Mesin:</label>
			<div class="col-sm-6">
			<select class = "form-control" name="jenis_mesin_preference">
  				<option value="0" selected>Semua</option>
  				<option value="1">DOHC</option>
  				<option value="2">SOHC</option>
  			</select>
		</div>
	</div>		
</div>
<div class="row ml-5 col-5">
	<div class="col-6 bor">
		<h2>Bobot</h2>
		<p>Bobot menentukan seberapa penting kriteria dalam menentukan keputusan.</p>
	</div>
	<div class="col-6 border">
	<table class="col-12 table-md float-right">
		
		<tbody>
			<tr>
				<td>1</td>
				<td>Sangat Tidak Penting</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Tidak Penting</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Netral</td>
			</tr>
			<tr>
				<td>4</td>
				<td>Penting</td>
			</tr>
			<tr>
				<td>5</td>
				<td>Sangat Penting</td>
			</tr>
		</tbody>
	</table>
	</div>
	<?php echo form_error('harga_bobot'); ?>
	<?php echo form_error('kapasitas_silinder_bobot'); ?>
	<?php echo form_error('kapasitas_penumpang_bobot'); ?>
	<table class="pt-2 table-striped table-md col-12">
		<tr>
			<td></td>
			
			<th>1</th>
			<th>2</th>
			<th>3</th>
			<th>4</th>
			<th>5</th>
				
		</tr>
		<tr>
			<td><label>Harga</label></td>
			
			<td><input type="radio" name="harga_bobot" value="1"></td>
			<td><input type="radio" name="harga_bobot" value="2"></td>
			<td><input type="radio" name="harga_bobot" value="3"></td>
			<td><input type="radio" name="harga_bobot" value="4"></td>
			<td><input type="radio" name="harga_bobot" value="5"></td>
			
		<tr>
			<td><label>Kapasitas Silinder</label></td>
			
			<td><input type="radio" name="kapasitas_silinder_bobot" value="1"></td>
			<td><input type="radio" name="kapasitas_silinder_bobot" value="2"></td>
			<td><input type="radio" name="kapasitas_silinder_bobot" value="3"></td>
			<td><input type="radio" name="kapasitas_silinder_bobot" value="4"></td>
			<td><input type="radio" name="kapasitas_silinder_bobot" value="5"></td>
		</tr>
		<tr>
			<td><label>Kapasitas Penumpang</label></td>
				
			<td><input type="radio" name="kapasitas_penumpang_bobot" value="1"></td>
			<td><input type="radio" name="kapasitas_penumpang_bobot" value="2"></td>
			<td><input type="radio" name="kapasitas_penumpang_bobot" value="3"></td>
			<td><input type="radio" name="kapasitas_penumpang_bobot" value="4"></td>
			<td><input type="radio" name="kapasitas_penumpang_bobot" value="5"></td>
				
		</tr>
		
	</table>
	
		<div class="offset-10 col-2 ">
			<!-- <p><h2>Submit</h2></p> -->
			<input class="btn btn-primary" type="submit" name="submit" value="SUBMIT">
		</div>
	</div>
</form>
</div>
<script type="text/javascript">
	$(".alert-warning").fadeTo(2000, 500).slideUp(500, function(){
    $(".alert-warning").slideUp(500);
});
</script>
</div>