 <?php session_start(); ?>
 <html>
 <head>
 	<title>YeYeDoy</title>
 	<style>
 		.baslik{
 			position: absolute;
 			top: 460px;
 			left: 450px;
 			text-align: center;
 			transform: translate(-50%,0);
            color: #7B6C66;
            font:bold 22px Arial, Helvetica, sans-serif;
 		}
 		.tarifresim2 img{
 			position: absolute;
 			top: 20px;
 			left: 80px;
 			width: 740px;
 			height: 425px;
 			border-radius: 10px;
 		}
 		#profilkismi2{
            position: absolute;
            right: 20px;
            bottom: 0;
            height: 425px;
            top: 20px;
            left: 75%;
            cursor: pointer;
            border-radius: 10px;
            -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
            transition: border-radius .3s ease,box-shadow .3s ease;
        }
        .isim2{
            position: absolute;
            top: 50%;
            left: 40%;
            transform: translate(0, -50%);
            color: #7B6C66;
            font:bold 100% Arial, Helvetica, sans-serif;
            text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.75);
            cursor: pointer;
        }
        .profil2{
            position: absolute;
            left: 25%;
            top: 50%;
            transform: translate(-50%, -50%);
            cursor: pointer;
        }
        .profil2 img{
        	width: 40px;
        	height: 40px;
        }
        .isimlik{
        	position: absolute;
        	top: 0;
        	left: 0;
        	width: 230px;
        	height: 70px;
        }
        .takip {
        	top: 80px;
        	left: 50%;
        	transform: translate(-50%, 0);
        	position: absolute;
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
		}.takip:hover {
			background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #c62d1f), color-stop(1, #f24537) );
			background:-moz-linear-gradient( center top, #c62d1f 5%, #f24537 100% );
			filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#c62d1f', endColorstr='#f24537');
			background-color:#c62d1f;
		}.takip:active {
			position:relative;
			bottom: 1px;
		}
        .isim3{
        	position: absolute;
            top: 180px;
            left: 50%;
            transform: translate(-50%,0);
            color: #C39797;
            font:bold 20px Arial, Helvetica, sans-serif;
        }
        .isim4{
        	position: absolute;
            top: 250px;
            left: 50%;
            transform: translate(-50%, 0);
            color: #9E7272;
            font:bold 20px Arial, Helvetica, sans-serif;
        }
        .meslek{
        	position: absolute;
            top: 400px;
            left: 50%;
            transform: translate(-50%, 0);
            color: #7B6C66;
            font:bold 100% Arial, Helvetica, sans-serif;
        }
        .ozelliklerkismi{
        	position: absolute;
        	top: 500px;
        	left: 0;
        	width: 100%;
        	height: calc(100% - 500px);
        }
        .basliklar{
        	left: 40px;
        	position: relative;
        	margin: 20px;
        	padding:10px;
        	border-style: solid;
        	border-width: medium;
        	float: left;
        	border-left-color: transparent;
        	border-top-color: transparent;
        	border-right-color: transparent;

        }
        .sorular{
        	font-family: verdana;
		    text-align: center;
		    font-size: 20px;
		    color: rgb(107, 0, 0);
        }
        .cevaplar{
        	font-family: verdana;
		    text-align: center;
		    font-size: 16px;
		    color: red;
        }
        .malzemeadi{
        	position: absolute;
        	top: 130px;
        	left: 60px;
        	 font-family: verdana;
		    text-align: center;
		    font-size: 25px;
		    color: rgb(79, 28, 28);
		    text-shadow: rgb(0, 0, 0) 1px 1px 1px;
        }
        ul.a {
        	position: absolute;
        	top: 160px;
        	padding:10px;
        	left: 60px;
			  list-style-type: circle;
			  font-family: verdana;
		    text-align: left;
		    margin:15px;
		    font-size: 15px;
		    color: #D01212;
		    text-shadow: rgb(0, 0, 0) 1px 1px 1px;
			}
			.b{
				margin-bottom: 10px;
			}
			.hazirlanis{
			position: absolute;
        	top: 330px;
        	left: 60px;
			}
			ul.c {
			position: absolute;
        	top: 160px;
        	width: 600px;
        	padding:10px;
        	left: 0;
			list-style-type: square;
			font-family: verdana;
		    text-align: left;
		    margin:15px;
		    font-size: 15px;
		    color: #300B0B;
		    text-shadow: rgb(0, 0, 0) 1px 1px 1px;
			}
			.d{
				margin-bottom: 10px;
			}
			.hazirlanisadi{
			position: absolute;
        	top: 130px;
        	left: 300px;
        	transform: translate(-50%, 0);
        	 font-family: verdana;
		    text-align: center;
		    font-size: 25px;
		    color: rgb(79, 28, 28);
		    text-shadow: rgb(0, 0, 0) 1px 1px 1px;
			}
			.yorumlar{
                position: relative;
                top: 1350px;
                left: 500px;
			}
            .area{
            }

            .butonyorum {
                margin-bottom: 30px;
                margin-top: 50px;
                margin-left: 100px;
                -moz-box-shadow:inset 0px 1px 3px 0px #2b665e;
                -webkit-box-shadow:inset 0px 1px 3px 0px #2b665e;
                box-shadow:inset 0px 1px 3px 0px #2b665e;
                background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #768d87), color-stop(1, #6c7c7c) );
                background:-moz-linear-gradient( center top, #768d87 5%, #6c7c7c 100% );
                filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#768d87', endColorstr='#6c7c7c');
                background-color:#768d87;
                -webkit-border-top-left-radius:5px;
                -moz-border-radius-topleft:5px;
                border-top-left-radius:5px;
                -webkit-border-top-right-radius:5px;
                -moz-border-radius-topright:5px;
                border-top-right-radius:5px;
                -webkit-border-bottom-right-radius:5px;
                -moz-border-radius-bottomright:5px;
                border-bottom-right-radius:5px;
                -webkit-border-bottom-left-radius:5px;
                -moz-border-radius-bottomleft:5px;
                border-bottom-left-radius:5px;
                text-indent:0;
                border:1px solid #566963;
                display:inline-block;
                color:#ffffff;
                font-family:arial;
                font-size:15px;
                font-weight:bold;
                font-style:normal;
                height:50px;
                line-height:50px;
                width:140px;
                text-decoration:none;
                text-align:center;
                text-shadow:0px -1px 0px #528ecc;
            }.butonyorum:hover {
                background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #6c7c7c), color-stop(1, #768d87) );
                background:-moz-linear-gradient( center top, #6c7c7c 5%, #768d87 100% );
                filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#6c7c7c', endColorstr='#768d87');
                background-color:#6c7c7c;
            }
            .begenikismi{
            position: absolute;
            right: 20px;
            bottom: 0;
            height: 125px;
            top: 475px;
            left: 75%;
            cursor: pointer;
            border-radius: 10px;
            -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
            transition: border-radius .3s ease,box-shadow .3s ease;
            }
            .tarifdetaybegeni{
                position: absolute;
                right: 0;
                top: 0;
                margin: 29.5px;
                margin-right: 60px;
            }
            .yorumdetay{
                background-color: #E6D2CD;
                width: 350px;
                margin: 20px;
                height: 75px;
                border-radius: 10px;
                -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
                -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
                box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
                transition: border-radius .3s ease,box-shadow .3s ease;
                }
            .yorumyazi{
                position: relative;
                text-align: left;
                top: 0;
                margin-left: 15px;
                color: rgb(107, 0, 0);
            }
            .yorumkullanici{
                font-size: 12px;
                position: relative;
                margin-right: 15px;
                left: 250px;
                top: 14px;
                color: #112d4d;
            }
            .yorumsil{
                position: relative;
                left: calc(100% - 25px);
                top:0;
                float: left;
                z-index: 9999;
            }
            .yorumduzenle{
                position: relative;
                top: 0;
                left: calc(100% - 77px);
            }
            .yorumduzenle img{
                width: 25px;
                height: 25px;
                cursor: pointer;
            }
            .yorumsil img{
                width: 25px;
                height: 25px;
                cursor: pointer;
            }


 	</style>
 </head>
 <body>
    <input type="hidden" id="gizli" value="<?php echo $_GET["id"]; ?>">
    <input type="hidden" id="gizli2" value="<?php echo $_SESSION["kID"]; ?>">
 <div>
 	<div>
        <div class="tarifresim2"><img src="images/pilav2.jpg"></div>
 		<div class="baslik">Müceddere Pilavı Tarifi</div>
 	</div>

 	<div id="profilkismi2">
 		<div class="isimlik">
            <div class="profil2"><img src="images/ornekprofil.png" ></div>

            <div class="isim2">Hasan AYDINER</div>
        </div>   
        <div><a href="#" class="takip">Takip Et</a></div>
        <div class="isim3">17 Takipçi</div>
        <div class="meslek" id="tDuzenle" style="display: none;">Düzenle</div>
        <div class="isim4">6  Paylaşım</div>
        
    </div>
    <div class="begenikismi" style="z-index: 9999">
        <div>
            <div style="margin: 29.5px; margin-left: 60px;"><img id="bLike" src="images/likeonay">
            <div class="tarifdetaybegeni"><img id="bDLike" src="images/diss"></div></div>

        </div>
    </div>

 </div>

 <div class="ozelliklerkismi">
 	<div class="basliklar">
 		<div class="sorular">Kaç Kişilik?</div>
 		<div class="cevaplar" id="kisilik">8 Kişilik</div>
 	</div>

 	<div class="basliklar">
 		<div class="sorular">Hazırlama Süresi?</div>
 		<div class="cevaplar" id="hsure">10 Dakika</div>
 	</div>

 	<div class="basliklar">
 		<div class="sorular">Pişirme Süresi?</div>
 		<div class="cevaplar" id="psure">20 Dakika</div>
 	</div>
	 	<div>
	 		<div class="malzemeadi">MALZEMELER</div>
	 		<ul class="a">
			</ul>
	 	</div>

	 	<div class="hazirlanis">
	 		<div class="hazirlanisadi">HAZIRLANIŞ</div>
	 			<ul class="c">
				  </ul>
	 	</div>
 </div>
 <div class="yorumlar">
        <div><textarea class="area" rows="8" cols="50" placeholder="Yorum yazabilirsiniz."></textarea></div>
        <a href="#" class="butonyorum">Yorum Yap</a>
        

        
 </div>

 </body>
 </html>
<script type="text/javascript">
    $(function(){
        $(".butonyorum").on("click",function(){
            var yorum = $(".area").val()
            $.ajax({
                url : "api/yorumekle.php",
                type : "post",
                data : "yorum="+yorum+"&id="+$("#gizli").val(),
                typeData : "json",
                success:function(e){
                    if(e["hata"])
                    {
                        alert(e["hataMesaj"])
                    }
                    else
                    {
                        alert("yorum eklendi");
                    }
                }
            })
        })


        $(".yorumlar").on("click",".yorumduzenle",function(){
            var yid = $(this).attr("yid") 
            var cerceve = $(this).parent()
            var yazi = cerceve.children(".yorumyazi").html()
            cerceve.children(".yorumyazi").html('<input yid="'+yid+'" type="text" value="'+yazi+'" onkeydown="search(this)">')
            
        })

        $(".yorumlar").on("keypress", "input", function(e){
            if(e.which == 13){
                var inputVal = $(this).val();
                var yid = $(this).attr("yid");
                var baba = $(this).parent();
                baba.html(inputVal);
                $.ajax({
                url : "api/yorumguncelle.php?id="+yid+"&yorum="+inputVal,
                type : "PUT",
                typeData : "json",
                success:function(e){
                    if(e["hata"])
                    {
                        alert(e["hataMesaj"])
                    }
                    else
                    {
                        alert("yorum Güncellendi");
                    }
                }
            })
            }
        });

        $(".yorumlar").on("click",".yorumsil",function(){
            var yid = $(this).attr("yid")
            $.ajax({
                url : "api/yorumsil.php?id="+yid,
                type : "DELETE",
                typeData : "json",
                success:function(e){
                    if(e["hata"])
                    {
                        alert(e["hataMesaj"])
                    }
                    else
                    {
                        alert("yorum silindi");
                    }
                }
            })
        })


        $("#bLike").on("click",function(){
            var islem = $(this).attr("islem")
            var durum = $(this).attr("durum")
            var tid = $(this).attr("tid")
            var method = "put"
            if(islem == 1)
            {
                method = "post"
            }
            else if(durum == 1)
                method = "delete"

            $.ajax({
                url : "api/begen.php?tid="+tid+"&d=l",
                type : method,
                data : "tid="+tid+"&d=l",
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


        $("#bDLike").on("click",function(){
            var islem = $(this).attr("islem")
            var durum = $(this).attr("durum")
            var tid = $(this).attr("tid")
            var method = "put"
            if(islem == 1)
            {
                method = "post"
            }
            else if(durum == 1)
                method = "delete"

            $.ajax({
                url : "api/begen.php?tid="+tid+"&d=d",
                type : method,
                data : "tid="+tid+"&d=d",
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


        $("#tDuzenle").on("click",function(){
            var tid = $(this).attr("tid")
            var method = "post"

            $.ajax({
                url : "ajax/tarifduzenle.php?tid="+tid,
                type : "get",
                typeData : "json",
                success:function(e){
                    $("#panel").html(e)
                }
            })
        })


        $(".takip").on("click",function(){
            var durum = $(this).attr("durum")
            var kid = $(this).attr("kid")
            var method = "post"
            if(durum == 1)
                method = "delete"

            $.ajax({
                url : "api/takip.php?kid="+kid,
                type : method,
                data : "kid="+kid,
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
        $.ajax({
            url : "api/tarifdetay.php",
            type : "GET",
            data : "id="+$("#gizli").val(),
            typeData : "json",
            success:function(e){
                if(e["hata"])
                {
                    alert(e["hataMesaj"])
                }
                else
                {
                    var dizi = e["veri"];
                      $(".tarifresim2 img").attr("src",dizi["tarif"]["resim"])
                      $(".profil2 img").attr("src",dizi["resim"])
                      $(".isim2").html(dizi["kisi"])
                      $(".isim3").html(dizi["takipci"] + " Takipçi")
                      $(".isim4").html(dizi["paylasim"] + " Paylaşım")
                      $(".baslik").html(dizi["tarif"]["ad"])
                      $("#kisilik").html(dizi["tarif"]["kisi"]+" Kişilik")
                      $("#hsure").html(dizi["tarif"]["hsure"]+" Dakika")
                      $("#psure").html(dizi["tarif"]["psure"]+" Dakika")
                      var malzemeListe = dizi["tarif"]["mliste"].split(",")
                      for (var i = 0; i < malzemeListe.length; i++) {
                        $("ul.a").append('<li class="b">'+malzemeListe[i]+'</li>');
                      }
                    
                      var yapilisListe = dizi["tarif"]["yapilis"].split(",")
                      for (var i = 0; i < yapilisListe.length; i++) {
                        $("ul.c").append('<li class="d">'+yapilisListe[i]+'</li>');
                      }

                      if(dizi["takipet"] == 2)
                      {
                        $(".takip").hide();
                        $("#tDuzenle").show().attr("tid",dizi["tarif"]["id"]);
                        $(".begenikismi").hide();
                      }
                      else if(dizi["takipet"] == 1)
                      {
                        $(".takip").html("Takip Bırak").attr("durum","1").attr("kid",dizi["tarif"]["k_id"]);
                      }
                      else
                        $(".takip").html("Takip Et").attr("durum","0").attr("kid",dizi["tarif"]["k_id"]);

                      if(dizi["yorum"] > 0)
                      {
                        for (var i = 0; i < dizi["yorumicerik"].length; i++) {
                            $ysd = "";
                            if(dizi["yorumicerik"][i]["k_id"] == $("#gizli2").val())
                                $ysd = '<div class="yorumsil" yid="'+ dizi["yorumicerik"][i]["id"] +'"><img src="images/bildirimsil.png"/></div><div class="yorumduzenle"  yid="'+ dizi["yorumicerik"][i]["id"] +'"><img src="images/duzenle.png"/></div>';

                            $(".yorumlar").append('<div class="yorumdetay">'+$ysd+'<div class="yorumyazi">'+dizi["yorumicerik"][i]["yorum"]+'</div><div class="yorumkullanici">'+dizi["yorumicerik"][i]["ad"]+ " " + dizi["yorumicerik"][i]["soyad"] +'</div></div>');
                          }
                         
                      }

                      var begenislem = 0;
                      if(!dizi["begend"] && !dizi["begenmed"])
                        begenislem = 1

                      if(dizi["begend"])
                      {
                        $("#bLike").attr("src","images/likeonay").attr("durum","1").attr("islem",begenislem).attr("tid",dizi["tarif"]["id"]);
                      }
                      else
                        $("#bLike").attr("src","images/like").attr("durum","0").attr("islem",begenislem).attr("tid",dizi["tarif"]["id"]);;

                    if(dizi["begenmed"])
                      {
                        $("#bDLike").attr("src","images/dissonay").attr("durum","1").attr("islem",begenislem).attr("tid",dizi["tarif"]["id"]);;
                      }
                      else
                        $("#bDLike").attr("src","images/diss").attr("durum","0").attr("islem",begenislem).attr("tid",dizi["tarif"]["id"]);;
                }
            }
        })

    })


</script>