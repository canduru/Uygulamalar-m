$(function(){
	$(".butonBasvur").on("click",function(){
		$.ajax({
			url : "ajax/kayit.php",
			success:function(e){
				$("body").html(e)
			}
		})
	})
	$("#geriGirisPanel").on("click",function(){
		window.location.reload(1);
	})

	$(".ekle").on("click",function(){
		window.location = "?s=tarifekle"
	})

	$(".bizimtariflerimiz").on("click",function(){
		window.location = "?s=yoneticitarifleri"
	})



	$(".butonGiris").on("click",function(){
		var email = $("#musterinum input").val()
		var sifre = $("#sifre input").val()
		$.ajax({
			url : "api/giris.php",
			type : "GET",
			data : "sifre="+sifre+"&email="+email,
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
	})

	
	$("#araKategori").change(function(){
		var deger = $(this).val();
		if(deger != 0)
		{
			$.ajax({
			url : "ajax/tarifler.php?a=k&d="+deger,
			type : "GET",
			typeData : "json",
			success:function(e){
				$("#panel").html(e)
			}
		})
		}
	})

	


	$("#profilkismi").click(function(){
		$.ajax({
			url : "ajax/profil.php",
			type : "GET",
			typeData : "json",
			success:function(e){
				$("#panel").html(e)
			}
		})
	})
	

	$(".ara").click(function(){
		var deger = $(".aratext").val();
		if(deger != 0)
		{
			$.ajax({
			url : "ajax/tarifler.php?a=a&d="+deger,
			type : "GET",
			typeData : "json",
			success:function(e){
				$("#panel").html(e)
			}
		})
		}
	})
	

	$(".butonKayit").on("click",function(){
		var ad = $("#ad input").val()
		var soyad = $("#soyad input").val()
		var email = $("#musterinum input").val()
		var sifre = $("#sifre input").val()
		var telefon = $("#telefon input").val()
		$.ajax({
			url : "api/kayit.php",
			type : "POST",
			data : "ad="+ad+"&soyad="+soyad+"&sifre="+sifre+"&email="+email+"&telefon="+telefon,
			typeData : "json",
			success:function(e){
				if(e["hata"])
				{
					alert(e["hataMesaj"])
				}
				else
				{
					alert("kayit yapıldı");
				}
			}
		})
	})

})