

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
                                <a href="<?php echo base_url();?>" class="navbar-brand"><img src="<?php echo base_url();?>assets/img/logo.png" alt=""></a>
                    
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
            Edit mobil
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
                            <style>
    .form-control.col-lg-6 {
        width: 50% !important;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <div class="box">
           
            <div id="collapse2" class="body">
                <form class= "form-horizontal" action="<?php echo base_url('admin/edit');?>" enctype="multipart/form-data" method="post">

                	<input type="hidden" name="id_mobil" value="<?php   echo $data_mobil->id_mobil ?>">
                    <div class="form-group">
                        <label class="control-label col-lg-4">Merk Mobil</label>
                        <div class="col-lg-4">
                            <select name="merk_mobil"class="validate[required] form-control">
                                 <option id ="TOYOTA" value="TOYOTA">TOYOTA</option>
                                <option id="HONDA" value="HONDA">HONDA</option>
                                <option id="DAIHATSU" value="DAIHATSU">DAIHATSU</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Tipe Mobil</label>
                        <div class="col-lg-4">
                            <input type="text" class="validate[required] form-control" name="tipe_mobil" value= "<?php   echo $data_mobil->tipe ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Tipe Mobil</label>
                        <div class="col-lg-4">
                            <select name="kategori_mobil"class="validate[required] form-control">
                                <option id="Coupe" value="Coupe">Coupe</option>
                                <option id="Hybrid" value="Hybrid">Hybrid</option>
                                <option id="Commercial" value="Commercial">Commercial</option>
                                <option id="Hatchback" value="Hatchback">Hatchback</option>
                                <option id="Sedan" value="Sedan">Sedan</option>
                                <option id="Sport" value="Sport">Sport</option>
                                <option id="SUV" value="SUV">SUV</option>
                                <option id="MPV" value="MPV">MPV</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-lg-4">Harga</label>
                        <div class="col-lg-4">
                            <input type="text" class="validate[required] form-control" name="harga_mobil" value= <?php   echo $data_mobil->harga ?>>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Kapasitas Penumpang</label>
                        <div class="col-lg-4">
                            <input type="text" min="1"  class="validate[required] form-control" name="kapasitas_penumpang" value= <?php   echo $data_mobil->kapasitas_penumpang ?>>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Kapasitas Silinder (CC)</label>
                        <div class="col-lg-4">
                            <input type="text" min="1"  class="validate[required] form-control" name="kapasitas_silinder" value= <?php   echo $data_mobil->kapasitas_silinder ?>>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Transmisi</label>
                        <div class="col-lg-4">
                            <select name="transmisi"class="validate[required] form-control">
                                <option id= "A/T" value="A/T">Automatic</option>
                                <option id="M/T" value="M/T">Manual</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Jenis Mesin</label>
                        <div class="col-lg-4">
                            <select name="jenis_mesin"class="validate[required] form-control">
                                <option id="DOHC" value="DOHC">DOHC</option>
                                <option id="SOHC" value="SOHC">SOHC</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Gambar</label>
                        <div class="col-lg-8">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <label for="file-input">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" >
                                 
                                        <img id="output"src = <?php echo base_url("uploads/$data_mobil->uri_gambar")?>  height='150' width='200'/>
                                    </label>
                                </div>
                                <input id="file-input" type="file" accept="image/*" name = gambar_url style="display: none;"  onchange="loadFile(event)" />
                            </div>
                        </div>
                    </div>



                    <!--  -->

                 
                    

                    <div class="form-actions no-margin-bottom">
                    	<a class="btn btn-primary" href="#" onclick="history.go(-1)" >Go Back</a>
                        <input type="submit" value="Ubah" class="btn btn-primary">
                    </div>
                </form>
               
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.outer -->
                </div>


 </div>
            <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2017 &copy; Metis Bootstrap Admin Template v2.4.2</p>
            </footer>
            <!-- /#footer -->
          
            <!--jQuery -->
            <script src="<?php echo base_url();?>assets/lib/jquery/jquery.js"></script>

                    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-en.min.js"></script>

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
                    	console.log("<?php   echo $data_mobil->merk ?>");
                    	 document.getElementById("<?php   echo $data_mobil->merk ?>").selected = "true";
                    	 document.getElementById("<?php   echo $data_mobil->kategori_mobil ?>").selected = "true";
                         document.getElementById("<?php   echo $data_mobil->transmisi ?>").selected = "true";
                         document.getElementById("<?php   echo $data_mobil->jenis_mesin ?>").selected = "true";
					    
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
                <script>
                  var loadFile = function(event) {
                    var output = document.getElementById('output');
                    output.src = URL.createObjectURL(event.target.files[0]);
                  };

                  function goback()
                    {
                        header("Location: {$_SERVER['HTTP_REFERER']}");
                        exit;
                    }
                     
                </script>


            <!-- <script src="assets/js/style-switcher.js"></script> -->
        </body>
