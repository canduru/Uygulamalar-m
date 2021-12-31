<?php session_start();
	include "system/baglan.php";
	if (empty($_SESSION["kID"])) {
		if(isset($_GET["sunuttum"]))
			include "ajax/sifremiunuttum.php";
		else
			include "ajax/giris.php";
	}
	else{
		include "ajax/anasayfa.php";
	}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>YeYeDoy</title>
 	<script type="text/javascript" src="system/js/jquery-3.1.1.min.js"></script>
 	<script type="text/javascript" src="system/js/sayfa.js"></script>
 </head>
 <body>
 
 </body>
 </html>
