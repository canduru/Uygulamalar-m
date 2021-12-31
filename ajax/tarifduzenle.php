<html>
 <head>
    <title>YeYeDoy</title>
 	<style>
 		#textbox {
		     padding: 10px;
		     width: 360px;
		     font-size: 17px;
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
		 #textbox:focus {
		     outline:none;
		}

 		.select1 {
            position: relative;
            display: inline-block;
            margin-bottom: 15px;
            width: 360px;

        }   
        .select1 select {
        	text-align: center;
            position: absolute;
            font-family: 'Arial';
            display: inline-block;
            width: 100%;
            cursor: pointer;
            padding: 13px 35px;
            outline: 0;
            border: 2px outset #000000;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            border-color: #cfa82c;
             background-color: #FFFFFF;
             color: #000000;
             border-style: ridge;
             border-radius: 14px;
             box-shadow: 2px 0px 5px rgba(66,66,66,.75);
             text-shadow: 0px 0px 5px rgba(66,66,66,.75)
        }
        .select1 select::-ms-expand {
            display: none;
        }
        .select1 select:hover,
        .select1 select:focus {
            color: #000000;
            background: #cccccc;
        }
        .select1 select:disabled {
            opacity: 0.5;
            pointer-events: none;
        }
        .select_arrow1 {
            position: absolute;
            top: 16px;
            right: 15px;
            pointer-events: none;
            border-style: solid;
            border-width: 8px 5px 0px 5px;
            border-color: #7b7b7b transparent transparent transparent;
        }
        .select1 select:hover ~ .select_arrow1,
        .select1 select:focus ~ .select_arrow1 {
            border-top-color: #000000;
        }
        .select1 select:disabled ~ .select_arrow1 {
            border-top-color: #cccccc;
        }
        .sol{
        	position: absolute;
        	top: 0;
        	margin: 40px;
        	height: 400px;
        }
        .sag{
        	position: absolute;
        	top: 70px;
        	right: 5%;
        	margin: 40px;
        	height: 400px;
        }
        .ozellik{
        	margin: 15px;
        }
        .uyari{
        	position: absolute;
            color: #7B6C66;
            font:bold 100% Arial, Helvetica, sans-serif;
        }
        .classname {
        	transform: translate(-50%, 0);
        	position: absolute;
			-moz-box-shadow:inset 0px 0px 14px -3px #f2fadc;
			-webkit-box-shadow:inset 0px 0px 14px -3px #f2fadc;
			box-shadow:inset 0px 0px 14px -3px #f2fadc;
			background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dbe6c4), color-stop(1, #9ba892) );
			background:-moz-linear-gradient( center top, #dbe6c4 5%, #9ba892 100% );
			filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dbe6c4', endColorstr='#9ba892');
			background-color:#dbe6c4;
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
			border:1px solid #b2b8ad;
			display:inline-block;
			color:#757d6f;
			font-family:arial;
			font-size:15px;
			font-weight:bold;
			font-style:normal;
			height:50px;
			line-height:50px;
			width:140px;
			text-decoration:none;
			text-align:center;
			text-shadow:0px 1px 0px #ced9bf;
		}.classname:hover {
			background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #9ba892), color-stop(1, #dbe6c4) );
			background:-moz-linear-gradient( center top, #9ba892 5%, #dbe6c4 100% );
			filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#9ba892', endColorstr='#dbe6c4');
			background-color:#9ba892;
		}.classname:active {
			position:relative;
			top:1px;
		}
		.alt{
			position: absolute;
			left: 0;
			bottom: 0;
			height: calc(100% - 400px);
			width: 100%;

		}
		.ozellik2{
			position: absolute;
			left: 50%;
			transform: translate(-50%, 0);
			top: 30px;
			height: 200px;
			
		}
		#buton1{
        	margin-top: 100px;
        	left: 50%;
        }
        #buton2{
        	left: 40%;
        	transform: translate(-50% , 0);
        	margin-top: 300px;
        }
        #buton3{
            left: 60%;
            transform: translate(-50% , 0);
            margin-top: 300px;
        }
 	</style>
 </head>
 <body>
    <?php 
        include '../system/baglan.php';

        $id = $_GET['tid']; 
        $query = $db->query("SELECT * FROM tarif WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
        if ( $query ){
            ?>
<form method="post" action="./api/tarifguncelle.php" name="dosyukle" id="dosyukle" enctype="multipart/form-data">
        <div class="sol">
            <div><input class="ozellik" name="ad" type="text" id="textbox" value="<?php echo $query['ad']; ?>" placeholder="Tarif Adı" /></div>
            <div><input class="ozellik" name="kisi" type="text" id="textbox" value="<?php echo $query['kisi']; ?>" placeholder="Kişi Sayısı" /></div>
            <div><input class="ozellik" name="hsure" type="text" id="textbox" value="<?php echo $query['hsure']; ?>" placeholder="Hazırlama Süresi(dk)" /></div>
            <div><input class="ozellik" name="psure" type="text" id="textbox" value="<?php echo $query['psure']; ?>" placeholder="Pişirme Süresi(dk)" /></div>
        <div class="select1" style="margin: 15px;">
                            <select name="kategori">
                                <option value="0">--Kategori Seçiniz--</option>
                                <option value="Tatlı">Tatlı</option>
                                <option value="Yemek">Yemek</option>
                                <option value="Kahvaltı">Kahvaltı</option>
                                <option value="Meze">Meze</option>
                            </select>
                            <div class="select_arrow1">
                            </div>
                        </div>
        </div>   

        <div class="sag">
            <div><input style="width: 450px;" class="ozellik" name="mliste" type="text" id="textbox" value="<?php echo $query['mliste']; ?>" placeholder="Malzeme Listesi" /></div> 
            <div class="uyari">Malzemeleri sırasıyla yazarken virgün ile ayırmayı unutmayınız.</div> 
            <div style="margin-top: 30px;">Resim Seç : <input type="file" name="dosya" id="dosya" /> </div>
        </div>

        <input type="hidden" name="tid" value="<?php echo $query['id']; ?>"/>
        <div class="alt">
            <div><input class="ozellik2" style="width: 700px;" name="yapilis" type="text" id="textbox" value="<?php echo $query['yapilis']; ?>" placeholder="Yapılışı ( Maddeler Halinde Yazınız )" /></div>
            <div><button id="buton2" class="classname">Tarifi Yükle</button> </div>
            <div><span id="buton3" tid="<?php echo $query['id']; ?>" class="classname">Tarifi Sil</span> </div>


        </div>
    </form>

            <?php
        }

     ?>
 		
 </body>
 </html>
<script type="text/javascript" src="system/js/jquery-3.1.1.min.js"></script>
 <script type="text/javascript">
     $(function(){
        $("#buton3").on("click",function(){
        var deger = $(this).attr("tid");
        if(deger != 0)
        {
            $.ajax({
                url : "api/tarifsil.php?tid="+deger,
                type : "DELETE",
                typeData : "json",
                success:function(e){
                    if(e["hata"])
                    {
                        alert(e["hataMesaj"])
                    }
                    else
                    {
                        window.location.reload(1);
                    }
                }
            })
            }
        })
     })
 </script>