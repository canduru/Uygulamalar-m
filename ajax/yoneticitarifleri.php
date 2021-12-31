<html>
 <head>
    <title>YeYeDoy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .baslik{
            text-align: center;
            top: 0;
            left: 0;
            color: #7B6C66;
            margin:15px;
            margin-top: 22px;
            font:bold 22px Arial, Helvetica, sans-serif;
        }
    </style>
 </head>
 <body>

<div class="baslik">Bizim Tariflerimiz</div>

<div class="satirPanel2">
   


    
</div>  


 </body>
 </html>
<script type="text/javascript" src="system/js/jquery-3.1.1.min.js"></script>
 <script type="text/javascript">
     $(function(){
        $.ajax({
            url : "ajax/tarifler.php?a=z&d=0",
            type : "GET",
            typeData : "json",
            success:function(e){
                $(".satirPanel2").html(e)
            }
     })
    })
 </script>