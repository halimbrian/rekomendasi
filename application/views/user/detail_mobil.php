<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-lg modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
		        <!-- <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $mobil[0]->tipe ?></h5> -->
		        <h5 class="modal-title" id="exampleModalLongTitle">Detail Mobil</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>

		      <?php 
		      foreach ($mobil as $data) {
		      	echo'
		      		 <div class="modal-body" id="modal-body">
				      	<div class="row">
				      		<div class="col-8">
				      			<b>'."$data->tipe".'</b>
				      			<table>
				      				<tr>
				      					<td>Harga</td>
				      					<td>Rp'.number_format("$data->harga",2,",",".").'</td>
				      				</tr>
				      				<tr>
				      					<td>Kapasitas Silinder</td>
				      					<td>'."$data->kapasitas_silinder".'</td>
				      				</tr>
				      				<tr>
				      					<td>Kategori Mobil</td>
				      					<td>'."$data->kategori_mobil".'</td>
				      				</tr>
				      				<tr>
				      					<td>Transmisi</td>
				      					<td>'."$data->transmisi".'</td>
				      				</tr>
				      				<tr>
				      					<td>Kapasitas Penumpang</td>
				      					<td>'."$data->kapasitas_penumpang".'</td>
				      				</tr>
				      				<tr>
				      					<td>Jenis Mesin</td>
				      					<td>'."$data->jenis_mesin".'</td>
				      				</tr>
				      			</table>
				      		</div>
				      		<div class="col-4">'."
				      			 <img class='lazyload img-fluid' src=".base_url("uploads/$data->uri_gambar")." alt= $data->merk height='600' width='1000'>".'
				      			
				      		</div>
				      	</div>
		      	';
		      }
		       ?>
		     
		      	
		    </div>
		    <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <!-- <input type = 'submit' value ='delete'/> -->
		       
		        <!-- <input type="submit" class="btn btn-primary">Save changes</input> -->
		   	</div>
		</div>
	<style>
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

	
	</style>
</div>