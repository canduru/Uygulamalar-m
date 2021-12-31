<html>
<head><meta charset="utf-8">
    <title>YeYeDoy</title>

    <script type="text/javascript" src="system/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="system/js/sayfa.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #arkaplan{
            position: absolute;
            left: 0;
            top:0;
            width: 100%;
            height: 100%;
            background: #DCDCDC;
                    }
        #onplan{
            position: absolute;
            top:50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background:#552e21;
            width: 40%;
            height: 50%;
            border-radius: 20px;
        }
        #panel{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: transparent;
        }
        input[type=text],input[type=password]{
            width: 100%;
            border:2px solid #aaa;
            border-radius:4px;
            margin:8px 0;
            outline:none;
            padding: 4% 0;
            box-sizing:border-box;
            transition:.3s;
            text-align: center;
            background-color: #564B47;
            color: #C0BCBA;
            border-left-color: #5d5d5d;
            border-right-color: #5d5d5d;
            border-top-color: #5d5d5d;
            
          }
  
          input[type=text]:focus, input[type=password]:focus{
            border-color:lightgoldenrodyellow;
            box-shadow:0 0 8px 0 gold;
          }
       


       
        #icpanel{
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
        }
        .logo{
            position: absolute;
            left: 50%;
            top: 20px;
            transform: translate(-50% , 0);
        }
        .elemanlar{
            top: 90px;
            left: 0;
            position: absolute;
            height: calc(100% - 110px);
            width: 100%;
            background-color: transparent;
            overflow: auto;
        }
        #musterinum{
            top: 25%;
            left: 55%;
            width: 35%;
            position: absolute; 
        }
        #ad{
            top: 15%;
            left: 10%;
            width: 35%;
            position: absolute; 
        }
        #soyad{
            top: 35%;
            left: 10%;
            width: 35%;
            position: absolute; 
        }
        #telefon{
            top: 55%;
            left: 10%;
            width: 35%;
            position: absolute; 
        }
        #sifre{
            top: 45%;
            left: 55%;
            width: 35%;
            position: absolute;

        }
        input.butonKayit{
            bottom:  10%;
            left: 50%;
            transform: translate(-50%, 0);
            position: absolute;
            height: 11%;
            width: 30%;
            background-color: #FBE26C;
            border-radius:  15px;
            padding:5px 10px;
            text-decoration:none;
            color:#5d5d5d;
            font:bold 100% Verdana, Geneva, sans-serif;
            box-shadow: 3px 3px 4px #000;
            border:1px solid #5d5d5d;
            text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.75);
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.75);
            outline: none;
            cursor: pointer;
        }

        input.butonKayit:hover {
            text-shadow: 0 0px 1px rgba(0, 0, 0, 0.75);
            box-shadow: 0 0px 2px rgba(0, 0, 0, 0.75);
        }
        .geri{
        position: absolute;
        bottom: 1%;
        left:50%;
        transform: translate(-50% , 0);
        color: #7B6C66;
        font:bold 100% Arial, Helvetica, sans-serif;
        cursor: pointer;
        text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.75);

        }
        


    </style>
    
    </head>
    
    <body>
        <div id="arkaplan">
            <div id="onplan">
                <div id="panel">
                    <div class="aktifpanel" id="icpanel">
                        <div class="logo"><img src="images/logo91.png" ></div>
                        <div class="elemanlar">
                          <div id="ad"><input type="text" placeholder="Adınız"></div>
                          <div id="soyad"><input type="text" placeholder="Soyadınız"></div>
                          <div id="musterinum"><input type="text" placeholder="Email Adresiniz"></div>
                          <div id="telefon"><input type="text" placeholder="Numaranız"></div>
                          <div id="sifre"><input type="password" placeholder="Şifreniz"></div>
                          <div><input type="submit" class="butonKayit" value="Kayıt Ol" /> </div>
                          <div id="geriGirisPanel" class="geri">Giriş Yap</div>
                        </div>
                        
                        
                    </div>
                </div>
                 

            </div>
        </div>
            
    </body>

</html>