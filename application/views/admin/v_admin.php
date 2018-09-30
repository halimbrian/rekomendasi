

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Table</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="<?php echo base_url();?>assets/img/metis-tile.png" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/bootstrap/css/bootstrap.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/metismenu/metisMenu.css">
    
    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/onoffcanvas/onoffcanvas.css">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/animate.css/animate.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/DataTables/datatables.min.css"/>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!--For Development Only. Not required -->
    <script>
        less = {
            env: "development",
            relativeUrls: false,
            rootpath: "/<?php echo base_url();?>assets/"
        };
    </script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="<?php echo base_url();?>assets/less/theme.less">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>
	<!-- lazyload -->

	<script src="<?php echo base_url();?>assets/js/lazysizes.min.js" async=""></script>

  </head>

        <body class="  ">
            <div class="bg-dark dk" id="wrap">
                <div id="top">
                    <!-- .navbar -->
                    <nav class="navbar navbar-inverse navbar-static-top">
                        <div class="container-fluid">
                    
                    
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <header class="navbar-header">
                    
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a href="<?php echo base_url();?>admin" class="navbar-brand"><img src="<?php echo base_url();?>assets/img/logo.png" alt=""></a>
                    
                            </header>
                    
                    
                    
                            <div class="topnav">
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip"
                                       class="btn btn-default btn-sm" id="toggleFullScreen">
                                        <i class="glyphicon glyphicon-fullscreen"></i>
                                    </a>
                                </div>
                                
                                <div class="btn-group">
                                    <a href="<?php echo base_url('login/logout'); ?>"" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
                                        <i class="fa fa-power-off"></i>
                                    </a>
                                </div>
                                
                    
                            </div>
                    
                    
                    
                    
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                    
                                <!-- .nav -->
                                <!-- <ul class="nav navbar-nav">
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li class="active"><a href="table.html">Tables</a></li>
                                    <li class='dropdown '>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            Form Elements <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="form-general.html">General</a></li>
                                            <li><a href="form-validation.html">Validation</a></li>
                                            <li><a href="form-wysiwyg.html">WYSIWYG</a></li>
                                            <li><a href="form-wizard.html">Wizard &amp; File Upload</a></li>
                                        </ul>
                                    </li>
                                </ul> -->
                                <!-- /.nav -->
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                    <!-- /.navbar -->
                        <header class="head">
<!--                                 <div class="search-bar">
                                    <form class="main-search" action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Live Search ...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-sm text-muted" type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form> -->
                                    <!-- /.main-search -->                                
                                <!-- </div> -->
                                <!-- /.search-bar -->
                            <div class="main-bar">
                                <h3>
              <i class="fa fa-table"></i>&nbsp;
            Daftar mobil
          </h3>
                            </div>
                            <!-- /.main-bar -->
                        </header>
                        <!-- /.head -->
                </div>
                <!-- /#top -->
                  
                <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            <!--Begin Datatables-->
<div class="row">
  <div class="col-lg-12">
        <div class="box">
           <!--  <header>
                <div class="icons"><i class="fa fa-table"></i></div>
                <h5>Daftar Mobil</h5>
            </header> -->
            <div id="collapse4" class="body">



            		<!--  -->
            	<table id="table_admin" class="table table-bordered table-condensed table-hover table-striped">
					<thead>
						<tr>
						<th>id</th>
						<th>merk</th>
						<th>tipe</th>
						<th>harga</th>
						<th>jenis mesin</th>
						<th>kapasitas penumpang</th>
						<th>kapasitas silinder</th>
						<th>kategori mobil</th>
						<th>transmisi</th>
						<th>url gambar</th>
						<th>Aksi</th>
					</tr>
					</thead>
					<tbody>
						<?php 
							foreach($data_mobil as $data){
								echo "<tr>
									<td>$data->id_mobil</td>
									<td>$data->merk</td>
									<td>$data->tipe</td>
									<td>".'Rp'.number_format("$data->harga",2,",",".")."</td>
									<td>$data->jenis_mesin</td>
									<td>$data->kapasitas_penumpang</td>
									<td>$data->kapasitas_silinder</td>
									<td>$data->kategori_mobil</td>
									<td>$data->transmisi</td>
									<td> <img class='lazyload' src=".base_url("uploads/$data->uri_gambar")." alt= $data->merk height='50' width='70'> </td>
									<td><div>
                                    <table>
                                    <tr><td>
									<form action=" .  base_url('admin/edit') ." method='get'>
									<input type = 'hidden' name = 'id_edit' value = $data->id_mobil> 
									<button class = 'btn btn-primary fa fa-edit' type = 'submit' value ='edit'></button>
									 </form>
                                     </td><td>

									 <button type='button' class='buttonini btn btn-primary fa fa-trash' data-toggle='modal' id=$data->id_mobil data-target='#helpModal'>

									</button>
                                    </td></tr>
                                    </table>
									</div>
									
									

							
								</tr>";
							}
							
						 ?>
					</tbody>
            		<!--  -->

              
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
<!--End Datatables-->





                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.outer -->
                </div>
                <!-- /#content -->

                   
            </div>
            <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2017 &copy; Metis Bootstrap Admin Template v2.4.2</p>
            </footer>
            <!-- /#footer -->
            <!-- #helpModal -->
            <div id="helpModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Delete Data</h4>
                        </div>
                        <div class="modal-body">
                           <p id=mobilId1>yakin ingin menghapus mobil dengan id - </p>
                        </div>
                        <div class="modal-footer row">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <form method="post" action = "<?php echo base_url('admin/delete');?>">
								<input type = 'hidden' name = 'deleteId' id="mobilId" value="" > <input class="btn btn-primary" type = 'submit' value ='delete'>
							</form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- /#helpModal -->
            <!--jQuery -->
            <script src="<?php echo base_url();?>assets/lib/jquery/jquery.js"></script>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
                    <script type="text/javascript" src="<?php echo base_url();?>assets/lib/DataTables/datatables.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.26.6/js/jquery.tablesorter.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

            <!--Bootstrap -->
            <script src="<?php echo base_url();?>assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="<?php echo base_url();?>assets/lib/metismenu/metisMenu.js"></script>
            <!-- onoffcanvas -->
            <script src="<?php echo base_url();?>assets/lib/onoffcanvas/onoffcanvas.js"></script>
            <!-- Screenfull -->
            <script src="<?php echo base_url();?>assets/lib/screenfull/screenfull.js"></script>


            <!-- Metis core scripts -->
            <script src="<?php echo base_url();?>assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="<?php echo base_url();?>assets/js/app.js"></script>

                <script>
                    $(document).ready( function () {
					    $('#table_admin').DataTable( {
					        dom: '<"col-sm-6 col-md-3"B><"col-sm-6 col-md-3"l><"col-sm-12 col-md-6"f><""r>t<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>',
					        buttons: [
					            {
					                text: 'Add Data',
					                action: function ( e, dt, node, config ) {
					                    window.location="<?php echo base_url('admin/add_data');?>";
					                }
					            }
					        ]
					    } );  	 
					} );
					$(document).on("click", ".buttonini", function () {
					     var mobilId = $(this).attr('id');
					     console.log(mobilId);

					    var element = document.getElementById("mobilId1");
					    var text = document.createTextNode(mobilId);

						element.appendChild(text);

					     $(".modal-body #mobilId").val( mobilId );
					     $(".modal-footer #mobilId").val( mobilId );
					     // As pointed out in comments, 
					     // it is superfluous to have to manually call the modal.
					     // $('#addBookDialog').modal('show');

					});
                </script>

            <!-- <script src="assets/js/style-switcher.js"></script> -->
        </body>

</html>
