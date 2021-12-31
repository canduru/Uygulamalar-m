<?php session_start(); error_reporting(0);?>
<html>
<head><meta charset="utf-8">

    
    <title>YeYeDoy</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #arkaplan{
            position: absolute;
            left: 0;
            top:0;
            width: 100%;
            height: 100%;
            background: white;
                    }
        #ustplan{
            position: absolute;
            left: 0;
            top:0;
            width: 100%;
            height: 10%;
            border-right-width: 0px;
            border-top-width: 0px;
            border-left-width: 0px;
            border-bottom-width: 2px;
            border-bottom-color: #a4a4a4;
            border-style: inset;
        }
        #kullanimalani{
            position: absolute;
            width: 70%;
            height: 100%;
            left: 15%;
            right: 15%;
        }
        #panel{
            position: absolute;
            left: 0;
            top: calc(10% + 2px);
            left: 15%;
            right: 15%;
            height: calc(90% - 2px);
            width: 70%;
            background: #EEEEEE;
            border-right-width: 2px;
            border-top-width: 0px;
            border-left-width: 2px;
            border-bottom-width: 0px;
            border-bottom-color: #a4a4a4;
            border-style: ridge;
            overflow: auto;

        }
        .isim{
            position: absolute;
            top: 50%;
            left: 30%;
            transform: translate(0 , -50%);
            color: #7B6C66;
            font:bold 100% Arial, Helvetica, sans-serif;
            text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.75);
            cursor: pointer;
        }
        .logo{
            position: absolute;
            left: 1%;
            top: 50%;
            transform: translate(0, -50%);
            cursor: pointer;
        }
        .profil{
            position: absolute;
            left: 2%;
            top: 50%;
            transform: translate(0, -50%);
            cursor: pointer;
        }
        .profil img{
            width: 64px;
            height: 64px;
        }
        #profilkismi{
            position: absolute;
            right: 0;
            bottom: 0;
            height: calc(100% - 20px);
            top: 10px;
            left: 80%;
            cursor: pointer;
            border-radius: 10px;
            -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
            transition: border-radius .3s ease,box-shadow .3s ease;
        }
        #profilkismi:hover{
            border-bottom-right-radius: 30px;

            -webkit-box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.75);
            box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.75);
        }

        .aratext {
            position: absolute;
            top: 50%;
            left: 35px;
            transform: translate(0, -50%);
             padding: 7px;
             font-size: 18px;
             border-width: 3px;
             border-color: #cfa82c;
             background-color: #FFFFFF;
             color: #000000;
             border-style: ridge;
             border-radius: 14px;
             box-shadow: 2px 0px 5px rgba(66,66,66,.75);
             text-shadow: 0px 0px 5px rgba(66,66,66,.75);
             padding-left: 45px;
        }
         .aratext:focus {
             outline:none;
        }
        .ustortaplan{
            position: absolute;
            top: 0;
            left: 230px;
            width: calc(80% - 230px);
            height: 100%;
        }
        .ara{
            position: absolute;
            top: 50%;
            left: 60px;
            transform: translate(-50% , -50%);
            cursor: pointer;
        }
        .select {
            position: relative;
            display: inline-block;
            margin-bottom: 15px;
            width: 23%;
            left: 70%;
            top: 30%;
        }   
        .select select {
            position: absolute;
            font-family: 'Arial';
            display: inline-block;
            width: 100%;
            cursor: pointer;
            padding: 8px 15px;
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
        .select select::-ms-expand {
            display: none;
        }
        .select select:hover,
        .select select:focus {
            color: #000000;
            background: #cccccc;
        }
        .select select:disabled {
            opacity: 0.5;
            pointer-events: none;
        }
        .select_arrow {
            position: absolute;
            top: 16px;
            right: 15px;
            pointer-events: none;
            border-style: solid;
            border-width: 8px 5px 0px 5px;
            border-color: #7b7b7b transparent transparent transparent;
        }
        .select select:hover ~ .select_arrow,
        .select select:focus ~ .select_arrow {
            border-top-color: #000000;
        }
        .select select:disabled ~ .select_arrow {
            border-top-color: #cccccc;
        }
        .ekle{
            position: absolute;
            bottom: 70px;
            right: 5%;
            cursor: pointer;
        }
        .ekleadi{
            position: absolute;
            bottom: 45px;
            right: 5%;
            color: #25b7d3;
            font:bold 100% Arial, Helvetica, sans-serif;
            cursor: pointer;
        }
        .tarif{
            width: 400px;
            height: 400px;
            position: relative;
            border-radius: 15px;
            float: left;
            margin:30px;
            -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
            cursor: pointer;
        }
        .tarifresim img{
            width: 360px;
            left: 20px;
            height: 300px;
            border-radius: 15px;
            top: 15px;
            position: absolute;
        }
        .tarifadi{
            color: #675C5C;
            font:bold 100% Arial, Helvetica, sans-serif;
            text-align: center;
            position: absolute;
            top: 335px;
            left: 0;
            width: 100%;
            font-size: 14pt;


        }
        .solTarif{
            float: left;
            margin: 15px;
        }
        .sagTarif{
            float: right;
            margin: 15px;

        }
        .temizle{
            clear: both;
        }
        .satirPanel{
            width: calc(100% - 30px);
            margin: 15;

        }
        .tarifKisi{
            z-index: 9999;
            position: absolute;
            background-color: maroon;
            padding: 10px;
            border-radius: 8px;
            width: 120px;
            text-align: center;
            color: white;
            top: 15px;
            right: 0;
        }
        #panel::-webkit-scrollbar {
          width: 1px;
          height: 1px;
        }
        #panel::-webkit-scrollbar-button {
          width: 2px;
          height: 2px;
        }
        #panel::-webkit-scrollbar-thumb {
          background: #fdca12;
          border: 13px none #ffffff;
          border-radius: 20px;
        }
        #panel::-webkit-scrollbar-thumb:hover {
          background: #f3be21;
        }
        #panel::-webkit-scrollbar-thumb:active {
          background: #f0b428;
        }
        #panel::-webkit-scrollbar-track {
          background: #535353;
          border: 14px none #ffffff;
          border-radius: 20px;
        }
        #panel::-webkit-scrollbar-track:hover {
          background: #464646;
        }
        #panel::-webkit-scrollbar-track:active {
          background: #414141;
        }
        #panel::-webkit-scrollbar-corner {
          background: transparent;
        }
        .yorum{
            z-index: 9999;
            position: absolute;
            bottom: 5px;
            left: 5px;
        }
        .yorumsayi{
            z-index: 9999;
            position: absolute;
            text-align: center;
            color: maroon;
            bottom: 8px;
            left: 40px;
            font-size: 22px;
            font-weight: bold;
        }
        .yorum img{
            width: 32px;
            height: 32px;
        }
        .diss{
            z-index: 9999;
            position: absolute;
            bottom: 3px;
            right: 25px;
        }
        .diss img{
            width: 32px;
            height: 32px;

        }
        .disssayi{
            z-index: 9999;
            position: absolute;
            text-align: center;
            color: maroon;
            bottom: 6px;
            right: 8px;
            font-size: 22px;
            font-weight: bold;
        }
        .like{
            z-index: 9999;
            position: absolute;
            bottom: 5px;
            right: 90px;
        }
        .like img{
            width: 32px;
            height: 32px;

        }
        .likesayi{
            z-index: 9999;
            position: absolute;
            text-align: center;
            color: maroon;
            bottom: 6px;
            right: 73px;
            font-size: 22px;
            font-weight: bold;
        }
        .bizimtariflerimiz{
            position: absolute;
            bottom: 70px;
            left: 5%;
            cursor: pointer;
        }
        .bizimtariflerimizadi{
            position: absolute;
            bottom: 45px;
            left: 4%;
            color: #2C3A95;
            font:bold 100% Arial, Helvetica, sans-serif;
            cursor: pointer;
        }

    </style>
    
    </head>
    
    <body>
       <div id="arkaplan">
            <div class="ekle"><img src="images/ekle.png"></div>
            <div class="ekleadi">Tarif Ekle</div>
            <div class="bizimtariflerimiz"><img src="images/bizimtariflerimiz.png"></div>
            <div class="bizimtariflerimizadi">Tariflerimiz</div>
            <div id="ustplan">
                <div id="kullanimalani">

                    <div class="logo"><a href="index.php"><img src="images/logo91.png" ></a></div>

                    <div class="ustortaplan">
                        <input type="text" class="aratext" />
                        <div class="ara"><img src="images/ara2.png" ></div>
                        <div class="select">
                            <select id="araKategori">
                                <option value="0">--Kategori Seçiniz--</option>
                                <option value="Tatlı">Tatlı</option>
                                <option value="Yemek">Yemek</option>
                                <option value="Kahvaltı">Kahvaltı</option>
                                <option value="Meze">Meze</option>
                            </select>
                            <div class="select_arrow">
                            </div>
                        </div>
                    </div>

                        <div id="profilkismi">
                            <div class="profil"><img src="<?php echo $_SESSION['kResim']; ?>" ></div>

                            <div class="isim"><?php echo $_SESSION["kAD"]; ?></div>
                            
                        </div>
                </div>
            </div>
                <div id="panel">
                    
                   
                    <?php 
                        if(isset($_GET["s"]))
                        {
                            if($_GET["s"] == "tarifler")
                                include "tarifler.php";
                            else if($_GET["s"] == "kullaniciBilgi")
                                include "profil.php";
                            else if($_GET["s"] == "tarifekle")
                                include "tarifekle.php";
                            else if($_GET["s"] == "tarifdetay")
                                include "tarifdetay.php";
                            else if($_GET["s"] == "yoneticitarifleri")
                                include "yoneticitarifleri.php";
                            else if($_GET["s"] == "tarifduzenle")
                                include "tarifduzenle.php";
                            else 
                                include "tarifler.php";
                        } 
                        else 
                            include "tarifler.php";
                    ?>

            </div>

        </div>
    </body>

</html>