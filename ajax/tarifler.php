<script type="text/javascript" src="system/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
    $(function(){
        $.ajax({
            url : "api/tarifler.php"+$("#gizli").val(),
            type : "GET",
            typeData : "json",
            success:function(e){
                if(e["hata"])
                {
                    alert(e["hataMesaj"])
                }
                else
                {
                    var dizi = e["veri"];
                    for (var i = 0; i < dizi.length; i++) {
                      $(".satirPanel").append('<div class="tarif" tid="'+dizi[i]["tarif"]["id"]+'" class="solTarif"><div class="tarifresim" ><img src="'+dizi[i]["tarif"]["resim"]+'" ></div><div class="tarifadi" >'+dizi[i]["tarif"]["ad"]+'</div><div class="tarifKisi">'+dizi[i]["kisi"]+'</div><div class="yorum" ><img src="images/yorum.png" ></div><div class="yorumsayi">'+dizi[i]["yorum"]+'</div><div class="diss" ><img src="images/diss.png" ></div><div class="disssayi">'+dizi[i]["begenme"]+'</div><div class="like" ><img src="images/like.png" ></div><div class="likesayi">'+dizi[i]["begen"]+'</div></div>')

                      

                    }
                    $(".satirPanel").append('<div class="temizle"></div>');

                }
            }
        })

    })


</script>
<input type="hidden"  id="gizli" value='<?php if(isset($_GET["a"])) {echo "?a=" . $_GET["a"] . "&d=".$_GET["d"];} ?>'  >
<div class="satirPanel">
   


    
</div>  
<script type="text/javascript">
    $(function(){
        $(".satirPanel").on("click",".tarif",function(){
            var tid = $(this).attr("tid")
            $.ajax({
                url : "ajax/tarifdetay.php",
                type : "GET",
                data : "id="+tid,
                typeData : "json",
                success:function(e){
                    $("#panel").html(e)
                }
            })
        })

        
    })
</script>



