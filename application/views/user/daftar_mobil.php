

		<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	<!-- lazyload -->
	<script src="<?php echo base_url();?>assets/js/lazysizes.min.js" async=""></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/grid.css">

	

      <!-- Related Projects Row -->
    <div class="container">
    	<div class="row">
    		<div class="my-4"></div>
	    	<div class="col-lg-8">
	    		<?php if(isset($langkah)){
	    		echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#stepmodals">Perhitungan VIKOR</button>

	    		<div class="modal fade" id="stepmodals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				  <div class="modal-dialog modal-lg" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLongTitle">Perhitungan VIKOR</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <b>Tabel Alternatif</b>
				        <table><tbody>
				        <tr><th>id mobil</th><th>Harga</th><th>Kapasitas Silinder</th><th>Kapasitas Penumpang</th></tr>';
				        foreach ($langkah["tabel_alternatif"] as $key=>$item) 
				        {
							// echo "<tr><td>$key</td>";
							foreach ($item as $key1) {
								echo "<td>$key1</td>";
							}
							echo "</tr>";
						}
						echo "</tbody></table>";

						// min max
						echo "<b>Min Max Value</b>";
						 echo "<table><tbody>";
						 echo "<tr><th></th><th>Harga</th><th>Kapasitas Silinder</th><th>Kapasitas Penumpang</th><tr/>";
						foreach ($langkah["max_min"] as $key=>$item) {
							echo "<tr><td>$key</td>";
							foreach ($item as $key1) {
								echo "<td>$key1</td>";
							}
							echo "</tr>";
						}
						echo "</tbody></table>";
						// echo "<table><tbody>";

						// normalisasi matriks
						 echo "<b>normalisasi matriks</b>";
						echo "<table><tbody>
						<tr><th>id mobil</th><th>Harga</th><th>Kapasitas Silinder</th><th>Kapasitas Penumpang</th></tr>";
						// echo $max_min["max"]["harga"];
						foreach ($langkah["normalisasi_matriks"] as $key=>$item) {
							echo "<tr><td>$key</td>";
							// $normalisasi_matriks["$key"] = array();
							foreach ($item as $key1=>$item1) {
								echo "<td>$item1</td>";
								
							}
							echo "</tr>";
						}
						echo "</table></tbody>";


						// bobot
						echo "<b>bobot</b>";
						echo "<table><tbody>
						";
						foreach ($langkah["bobot"] as $key=>$item) {
							echo "<tr><th>$key</th><td>$item</td>";
							
							echo "</tr>";
						}
						echo "</table></tbody>";

						// normalisasi bobot

						echo "<b>normalisasi bobot</b>";
						echo "<table><tbody>
						<tr><th>id mobil</th><th>Harga</th><th>Kapasitas Silinder</th><th>Kapasitas Penumpang</th></tr>";
						foreach ($langkah["normalisasi_bobot"] as $key=>$item) {
							echo "<tr><td>$key</td>";
							$normalisasi_matriks["$key"] = array();
							foreach ($item as $key1=>$item1) {
								echo "<td>$item1</td>";
								
							}
							echo "</tr>";
						}
						echo "</table></tbody>";

						// utility and regret measure
						echo "<b>utility and regret</b>";
						echo "<table><tbody>
						<tr><th>id mobil</th><th>Utility</th><th>Regret</th></tr>";
						foreach ($langkah["utility"] as $key => $value) {
							echo "<tr><td>$key</td>";
							echo "<td>$value</td>";
							echo '<td>'.$langkah["regret"]["$key"].'</td></tr>';
						}
						foreach ($langkah["smax_min"] as $key => $value) {
							echo "<tr><th>$key</th>";
							echo "<td>$value</td>";
							echo '<td>'.$langkah["rmax_min"]["$key"].'</td></tr>';
						}
						echo "</tbody></table>";

						// echo "regret";
						// 	echo "<table><tbody>";
						// foreach ($langkah["regret"] as $key => $value) {
						// 	echo "<tr><td>$key</td>";
						// 	echo "<td>$value</td></tr>";
						// }
						// echo "</tbody></table>";

						// indeks vikor
						echo "<b>Indeks VIKOR</b>";
						echo "<table><tbody
						<tr><th>id mobil</th><th>indeks VIKOR</th>";
						foreach ($langkah["indeks_vikor"] as $key => $value) {
							echo "<tr><td>$key</td>";
							echo "<td>$value</td></tr>";
						}
						echo "</tbody></table>";

						// sorted
						// indeks vikor
						echo "<b>Sorted Indeks VIKOR</b>";
						echo "<table><tbody
						<tr><th>id mobil</th><th>indeks VIKOR</th>";
						foreach ($langkah["sorted"] as $key => $value) {
							echo "<tr><td>$key</td>";
							echo "<td>$value</td></tr>";
						}
						echo "</tbody></table>";
				      echo '</div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>
	    		';
	    		echo "<style>
		table {
		    font-family: arial, sans-serif;
		    border-collapse: collapse;
		    width: 100%;
		}

		td, th {
		    border: 1px solid #dddddd;
		    text-align: left;
		    padding: 8px;
		}

	
	</style>";
	    	} ?>
	    		
	    	<?php  
	    	if(isset($mobil)){
	    		?>

	    	</div>
		    <div class="col-lg-4">
		      	<input placeholder="Start typing.." name="search" class="form-control searchbox-input" required="" type="search">
		    </div>
		</div>
      	
			<?php 
			
			echo "<div class='row'>";
				foreach($mobil as $data){
					echo '
					<div class ="col-lg-3 col-sm-12 mb-4">
						 <div class="card h-100 card-img-top " onclick="getdetails('."$data->id_mobil".');" id=card'."$data->id_mobil".'><div style="height: 200px; line-height: 200px;">'."
						 	<img class='lazyload align-middle img-fluid' src=".base_url("uploads/$data->uri_gambar")." alt= $data->merk height='200' width='500'></div>".'

						        <h4 class="card-body">'."$data->merk"." ".ucwords("$data->tipe").'</h4>
						        <div class="card-footer">'."Detail
						        ".'</div>
						    	
						    
					    </div>
				    </div>
					   
';
				}
				echo " </div>";
			} else {
				echo "<h3>".$msg."</h3>";
			}
				
			 ?>
			 <?php 
// 			echo "<div class='row'>";
// 				foreach($mobil as $data){
// 					echo '
// 					<figure class ="col-lg-3 col-sm-12 mb-4">
// 						 <div class="" onclick="getdetails('."$data->id_mobil".');" id=card'."$data->id_mobil".'>'."
// 						 	<img class='lazyload img-fluid figure-img' src=".base_url("uploads/$data->uri_gambar")." alt= $data->merk height='300' width='500'>".'

// 						        <h4 class="figure-caption text-center font-weight-bold">'.ucwords("$data->tipe").'</h4>
// 						        <h2 class="figure-caption text-center font-weight-bold">'."$data->merk ".'</h2>
						    	
						    
// 					    </div>
// 				    </figure>
					   
// ';
// 				}
// 				echo " </div>";
				
			 ?>
	</div>
</div>


<!-- modals untuk detail mobil -->
		<div id="target_modals"></div>
		



<script type="text/javascript">
	//untuk searching
	$('.searchbox-input').on('keyup',function () {
	  console.log(filter);
	    //$('.card').show();
		var filter = $(this).val(); // get the value of the input, which we filter on
	  console.log(filter);
	    $('.container').find(".card-body:not(:contains(" + filter + "))").parent().parent().css('display','none');
	    $('.container').find(".card-body:contains(" + filter + ")").parent().parent().css('display','');
	});
	// menampilkan data mobil secara detail

	 function getdetails($id){
	 	console.log($id);
	 	 // $('#exampleModalLong').modal();
        $.ajax({
            type    : 'POST', 
            url     : '<?php echo base_url(); ?>daftar_mobil/getdetails',
            data 	: {"id":$id},
            cache   : false,
            success : function(data){ 
               if(data){
                    $('#target_modals').html(data);

                    //This shows the modal
                    $('#exampleModalLong').modal();
               }
            },
             error: function(){
			    alert('failure');
			  }

        });
    }
</script>

</script>
</body>
</html>