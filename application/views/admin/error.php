<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<ul>
	<?php 
	foreach ($data as $key => $value) {
		?>
	 	<li><?php echo $key . " : " . $value; ?></li>
	 	<?php 
	 } 
	  ?>
</ul>
</body>
</html>