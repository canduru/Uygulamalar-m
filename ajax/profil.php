<?php session_start(); ?>
<html>
 <head>
 	<title>YeYeDoy</title>

 	<style>
 		
 		#butun{
 			position: absolute;
 			height: 100%;
 			width: 100%;
 			top: 0;
 			left: 0;
 		}
 		#ilkyari{
 			position: absolute;
 			top: 0;
 			left: 0;
 			height: 50%;
 			width: 100%;
 		}
 		#ikinciyari{
 			position: absolute;
 			top: 50%;
 			left: 0;
 			height: 50%;
 			width: 100%;
 		}
 		.tariflerimbaslik{
 			text-align: center;
 			color: #7B6C66;
            font:bold 22px Arial, Helvetica, sans-serif;
            margin: 20px;
 		}
 		.ilkyari1{
    overflow: auto;
 			position: absolute;
 			top: 0;
 			left: 0;
 			width: calc(100% / 3);
 			height: 100%;
 			border-right-width: 1px;
 			border-left-width: 0px;
 			border-top-width: 0px;
 			border-bottom-width: 1px;
 			border-style: solid;
 			-webkit-box-shadow: 7px 7px 15px -4px rgba(0,0,0,0.72);
			-moz-box-shadow: 7px 7px 15px -4px rgba(0,0,0,0.72);
			box-shadow: 7px 7px 15px -4px rgba(0,0,0,0.72);
 		}
 		.ilkyari2{
 			position: absolute;
 			top: 0;
 			left: calc(100% / 3);
 			width: calc(100% / 3);
 			height: 100%;
 			border-right-width: 1px;
 			border-left-width: 0px;
 			border-top-width: 0px;
 			border-bottom-width: 1px;
 			border-style: solid;
 			-webkit-box-shadow: 7px 7px 15px -4px rgba(0,0,0,0.72);
			-moz-box-shadow: 7px 7px 15px -4px rgba(0,0,0,0.72);
			box-shadow: 7px 7px 15px -4px rgba(0,0,0,0.72);
 		}
 		.ilkyari3{
 			position: absolute;
 			top: 0;
 			left: calc((100% / 3) * 2);
 			width: calc(100% / 3);
 			height: 100%;
 			border-right-width: 0px;
 			border-left-width: 0px;
 			border-top-width: 0px;
 			border-bottom-width: 1px;
 			border-style: solid;
 			-webkit-box-shadow: 7px 7px 15px -4px rgba(0,0,0,0.72);
			-moz-box-shadow: 7px 7px 15px -4px rgba(0,0,0,0.72);
			box-shadow: 7px 7px 15px -4px rgba(0,0,0,0.72);
 		}


			.butonlar {
				-moz-box-shadow:inset 0px 1px 0px 0px #e04b3a;
				-webkit-box-shadow:inset 0px 1px 0px 0px #e04b3a;
				box-shadow:inset 0px 1px 0px 0px #e04b3a;
				background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #a89888), color-stop(1, #8a6d4d) );
				background:-moz-linear-gradient( center top, #a89888 5%, #8a6d4d 100% );
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#a89888', endColorstr='#8a6d4d');
				background-color:#a89888;
				-webkit-border-top-left-radius:3px;
				-moz-border-radius-topleft:3px;
				border-top-left-radius:3px;
				-webkit-border-top-right-radius:3px;
				-moz-border-radius-topright:3px;
				border-top-right-radius:3px;
				-webkit-border-bottom-right-radius:3px;
				-moz-border-radius-bottomright:3px;
				border-bottom-right-radius:3px;
				-webkit-border-bottom-left-radius:3px;
				-moz-border-radius-bottomleft:3px;
				border-bottom-left-radius:3px;
			text-indent:0;
				border:1px solid #54381e;
				display:inline-block;
				color:#ffffff;
				font-family:arial;
				font-size:18px;
				font-weight:bold;
				font-style:normal;
			height:43px;
				line-height:43px;
			width:136px;
				text-decoration:none;
				text-align:center;
				text-shadow:0px 1px 0px #875856;
			}.butonlar:hover {
				background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #8a6d4d), color-stop(1, #a89888) );
				background:-moz-linear-gradient( center top, #8a6d4d 5%, #a89888 100% );
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#8a6d4d', endColorstr='#a89888');
				background-color:#8a6d4d;
			}


 		.butonlar2 {
			-moz-box-shadow:inset 0px 1px 0px 0px #f5978e;
			-webkit-box-shadow:inset 0px 1px 0px 0px #f5978e;
			box-shadow:inset 0px 1px 0px 0px #f5978e;
			background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #f24537), color-stop(1, #c62d1f) );
			background:-moz-linear-gradient( center top, #f24537 5%, #c62d1f 100% );
			filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f24537', endColorstr='#c62d1f');
			background-color:#f24537;
			-webkit-border-top-left-radius:6px;
			-moz-border-radius-topleft:6px;
			border-top-left-radius:6px;
			-webkit-border-top-right-radius:6px;
			-moz-border-radius-topright:6px;
			border-top-right-radius:6px;
			-webkit-border-bottom-right-radius:6px;
			-moz-border-radius-bottomright:6px;
			border-bottom-right-radius:6px;
			-webkit-border-bottom-left-radius:6px;
			-moz-border-radius-bottomleft:6px;
			border-bottom-left-radius:6px;
			text-indent:0;
			border:1px solid #d02718;
			display:inline-block;
			color:#ffffff;
			font-family:Arial;
			font-size:22px;
			font-weight:bold;
			font-style:normal;
			height:43px;
			line-height:43px;
			width:137px;
			text-decoration:none;
			text-align:center;
			text-shadow:0px 1px 0px #810e05;
		}.butonlar:hover {
			background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #c62d1f), color-stop(1, #f24537) );
			background:-moz-linear-gradient( center top, #c62d1f 5%, #f24537 100% );
			filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#c62d1f', endColorstr='#f24537');
			background-color:#c62d1f;
		}
		#ozz{
			margin: 50px;
			left: 50%;
			width: 160px;
			margin-left: 150px;
		}
		#textbox5 {
			margin-left: 55px;
			margin-right: 30px; 
		     padding: 10px;
		     width: 160px;
		     font-size: 14px;
		     border-width: 2px;
		     border-color: #cfa82c;
		     background-color: #ffffff;
		     color: #613737;
		     border-style: inset;
		     text-align: center;
		     border-radius: 8px;
		     box-shadow: 4px 6px 8px rgba(66,66,66,.52);
		     text-shadow: 0px 0px 5px rgba(66,66,66,.75);
		}
		 #textbox5:focus {
		     outline:none;
		}
		.yazilar{
			text-align: center;
 			color: #7B6C66;
            font:bold 16px Arial, Helvetica, sans-serif;
            margin: 25px;
		}
		.bildirimpencere{
			background-color: #FFF4D5;
			left: 0;
			top:0;
			width: calc(100% - 20px);
			margin: 10px;
			border-radius: 22px 22px 22px 22px;
			-moz-border-radius: 22px 22px 22px 22px;
			-webkit-border-radius: 22px 22px 22px 22px;
			border: 2px solid #9E7E7E;
			float: left;
			height: 130px;
			-webkit-box-shadow: 7px 4px 8px -5px rgba(0,0,0,0.66);
			-moz-box-shadow: 7px 4px 8px -5px rgba(0,0,0,0.66);
			box-shadow: 7px 4px 8px -5px rgba(0,0,0,0.66);
		}
		.bildirimsil{
			position: absolute;
			right: 30px;
			margin-top: -90px;
		}
		.bildirimsil img{
			width: 32px;
			height: 32px;
			cursor: pointer;

		}



 	</style>

 </head>
 <body>

 	<div id="butun">




 		<div id="ilkyari">

 			<div class="ilkyari1" id="bildirimListe">
 				<div class="tariflerimbaslik">Bildirimler</div>
 				

 			</div>

 			<div class="ilkyari2">
 				<div class="tariflerimbaslik" style="margin-bottom: 55px;">Kişisel Bilgiler</div>
 				<div class="yazilar" id="iyad" style="font:bold 19px Arial, Helvetica, sans-serif; color: #5B271C;"><?php echo $_SESSION["kAD"]; ?></div>
 				<div class="yazilar" id="iytp" style="color: #9E8079;">Toplam Paylaşım : 7</div>
 				<div class="yazilar" id="iytl" style="color: #9E8079;">Toplam Like : 11</div>
 				<div class="yazilar" id="iytd" style="color: #9E8079;">Toplam Disslike : 3</div>
 				<div class="yazilar" id="iyty" style="color: #9E8079;">Toplam Yorum : 5</div>



 			</div>

 			<div class="ilkyari3">
 				<div class="tariflerimbaslik">İşlemler</div>
 				<div>
 					<form action="api/resimyukle.php" method="POST" name="dosyukle" id="dosyukle" enctype="multipart/form-data">
 						Resim Seç : <input type="file" name="dosya" id="dosya" /> <button id="ozz" class="butonlar">Resim Yükle</button>
 					</form>
 				</div>
 				<div>
 					<input type="text" id="textbox5" placeholder="Yeni Şifre" />
 					<a href="#" class="butonlar" id="sifreDegistir">Değiştir</a>
 				</div>
 				<div><a href="ajax/cikis.php" id="ozz" class="butonlar2">Çıkış Yap</a></div>


 			</div>


 		</div>




 		<div id="ikinciyari">
 			<div class="satirPanel2">
 		

    
</div>  

 		</div>
 	</div>	


 
 </body>
 </html>

 	<script type="text/javascript" src="system/js/jquery-3.1.1.min.js"></script>
 	<script type="text/javascript">
 		$(function(){
 			
 			$.ajax({
			url : "api/profilbilgi.php",
			type : "GET",
			typeData : "json",
			success:function(e){
				if(e["hata"])
				{
					alert(e["hataMesaj"])
				}
				else
				{
					$("#iytp").html("Toplam Paylaşım : "+e["paylasim"]);
					$("#iytl").html("Toplam Like : : "+e["begen"]);
					$("#iytd").html("Toplam Disslike : "+e["begenme"]);
					$("#iyty").html("Toplam Yorum : "+e["yorum"]);
				}
			}
		})



 			$.ajax({
			url : "api/bildirim.php",
			type : "GET",
			typeData : "json",
			success:function(e){
				if(e["hata"])
				{
					alert(e["hataMesaj"])
				}
				else
				{
					$("#bildirimListe").html('<div class="tariflerimbaslik">Bildirimler</div>');
					for (var i = 0; i < e["veri"].length; i++) {
						$("#bildirimListe").append('<div class="bildirimpencere"><div class="yazilar" style="margin-top: 10px">'+e["veri"][i]["ad"] + " " + e["veri"][i]["soyad"]+'</div><div class="yazilar"  style="color: #9C8C1A;">'+e["veri"][i]["tarif"]+'</div><div class="yazilar" style="color: #BD0000;">'+e["veri"][i]["islem"]+'</div><div class="bildirimsil" bid="'+e["veri"][i]["id"]+'"><img src="images/bildirimsil.png"></div></div>')
					}
				}
			}
		})


 			$("#bildirimListe").on("click",".bildirimsil",function(){
 				var bid = $(this).attr("bid");
 				$.ajax({
				url : "api/bildirimguncelle.php?id="+bid,
				type : "PUT",
				typeData : "json",
				success:function(e){
					if(e["hata"])
					{
						alert(e["hataMesaj"])
					}
					else
					{
						alert(e["mesaj"]);
					}
				}
			})
 			})

 			
 			$.ajax({
			url : "ajax/tarifler.php?a=t&d=0",
			type : "GET",
			typeData : "json",
			success:function(e){
				$(".satirPanel2").html("<div class='tariflerimbaslik'>Tariflerim</div>"+e+'<div class="temizle"></div>')
			}
 		})

 			



 			$("#sifreDegistir").on("click",function(){
 				var sifre = $("#textbox5").val();
 				$.ajax({
				url : "api/sifredegistir.php?sifre="+sifre,
				type : "PUT",
				typeData : "json",
				success:function(e){
					if(e["hata"])
					{
						alert(e["hataMesaj"])
					}
					else
					{
						alert(e["mesaj"])
					}
				}
 			})
 				})
 		})
			
 	</script>