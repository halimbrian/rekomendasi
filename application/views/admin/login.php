<!-- <!DOCTYPE html>
<html>
<head>
	<title>Website Rekomendasi Pemilihan Mobil</title>
</head>
<body>
	<h1>Website Rekomendasi Pemilihan Mobil</h1>
	<form action="<?php 
	// echo base_url('login/aksi_login');
	 ?>" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>


 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login Page</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/bootstrap/css/bootstrap.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/font-awesome/css/font-awesome.css">
    
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/metismenu/metisMenu.css">
    
    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/onoffcanvas/onoffcanvas.css">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/animate.css/animate.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="login">

      <div class="form-signin">
    <div class="text-center">
        <img src="assets/img/logo.png" alt="Metis Logo">
    </div>
    <hr>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form  action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                <p class="text-muted text-center">
                    Enter your username and password
                </p>
                <input type="text" name="username" placeholder="Username" class="form-control top">
                <input type="password"  name="password" placeholder="Password" class="form-control bottom">
                <!-- <div class="checkbox"> -->
		 <!--  <label>
		    <input type="checkbox"> Remember Me
		  </label> -->
		</div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
        </div>
    </div>
  </div>


    <!--jQuery -->
    <script src="<?php echo base_url();?>assets/lib/jquery/jquery.js"></script>

    <!--Bootstrap -->
    <script src="<?php echo base_url();?>assets/lib/bootstrap/js/bootstrap.js"></script>


    <script type="<?php echo base_url();?>text/javascript">
       
    </script>
</body>

</html>
